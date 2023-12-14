<?php

namespace App\Http\Controllers;

use App\Models\Candidatura;
use App\Models\Categoria;
use App\Models\RepresentanteEmpresa;
use App\Models\Empresa;
use App\Models\Modalidade;
use App\Models\Periodo;
use App\Models\User;
use App\Models\Vaga;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    public readonly Empresa $empresa;
    public readonly User $user;
    public readonly RepresentanteEmpresa $representante;


    public function __construct()
    {
        $this->empresa = new Empresa();
        $this->user = new User();
        $this->representante = new RepresentanteEmpresa();
    }

    public function create()
    {
        return view('site/company-register');
    }

    public function store(Request $request)
    {
        // Recuperar dados do formulário, exceto os que estão em except
        $data = $request->except('_token');

        // Salvar o endereço da empresa
        $data['endereco'] = $data['logradouro'] . ", " . $data['numero'];

        //  dd($data);      

         // Verificar se uma imagem foi enviada
        if (!empty($data['picture__input'])) {
            // Obter a imagem do usuário
            $imagem = $request->file('picture__input');

            // Gerar novo nome com extensão original
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

            // Salvar a imagem na pasta storage/app/public/uploads/empresas
            $caminhoImagem = $imagem->storeAs('public/uploads/empresas', $nomeImagem);

            // Criar usuário com imagem
            $create_user = $this->user->create([
                'nome' => $data['nm_fantasia'],
                'email' => $data['email'],
                'senha' => Hash::make($data['senha']),
                'nm_img' => str_replace('public/', 'storage/', $caminhoImagem), // Corrigindo o caminho
                'tipo' => 'empresa',
            ]);
        } else {
            // Criar usuário sem imagem
            $create_user = $this->user->create([
                'nome' => $data['nm_fantasia'],
                'email' => $data['email'],
                'senha' => Hash::make($data['senha']),
                'tipo' => 'empresa',
            ]);
        }

        // Criar representante
        $create_representante = RepresentanteEmpresa::create([
            'nm_representante' => $data['nm_representante'],
            'cpf_representante' => $data['cpf_representante'],
            'telefone_comercial' => $data['tel_comercial'],
            'telefone_celular' => $data['tel_celular'],
            'email' => $data['email'],
        ]);

        $user = $create_user; // Obtém a empresa recém-criado

        if ($create_representante) {

            // dd($data['nm_representante']);

            // Criar empresa usando o relacionamento
            $user->empresa()->create([
                'nm_fantasia' => $data['nm_fantasia'],
                'cnpj' => preg_replace("/[^0-9]/", "", $data['cnpj']),
                'razao_social' => $data['razao_social'],
                'descricao' => $data['sobre'],
                'endereco' => $data['endereco'],
                'cep' => $data['cep'],
                'id_representante' => $create_representante->id,
            ]);
        }

        Auth::login($create_user);

        return redirect()->route('index');
    }

    public function show($id)
    {
        $user = User::with('empresa')->find($id);
        
        $empresa = $user->empresa;

        $cep = $user->empresa->cep;

        $enderecoData = $this->enderecoUser($cep);

        $ajuste = '../../';
        
        return view('site/company-profile', compact('user', 'empresa', 'enderecoData', 'ajuste'));

    }

    public function showProfile()
    {
        // Encontrar o usuário pelo ID
        $user = User::with('empresa')->find(auth()->user()->id);
        $empresa = $user->empresa;

        // Verificar se a empresa foi encontrada
        if ($empresa) {

                // Se sim, obter o CEP
                $cep = $empresa->cep;

                // Chamar a função para obter os dados do endereço
                $enderecoData = $this->enderecoUser($cep);

                //ajuste no caminho da img para navbar 
                $ajuste = '../';

                return view('site/logged-company-profile', compact('empresa', 'enderecoData', 'ajuste'));
        } else {
            return redirect()->route('index');
        }
    }

    public function editProfile(Request $request)
    {
        // Obter dados do formulário
        $data = $request->except('_token');

        // Obter a empresa que quer fazer a atualização 
        $user = User::with('empresa')->find(auth()->user()->id);

        // Lógica de upload de imagem
        $this->uploadImage($request, $user);

        if(!empty($data['descricao'])){
            // Atualizar outros campos do usuário, se necessário
            $user->empresa()->update([
                'descricao' => $data['descricao'],
            ]);
        }

        return redirect()->route('company.profile');
    }
    
    public function editData()
    {
        $user = User::with('empresa')->find(auth()->user()->id);
        $empresa = $user->empresa;
        $empresa->numero = preg_replace('/\D/', '', $empresa->endereco);
        $enderecoData = $this->enderecoUser($empresa->cep);
        
        //ajuste no caminho da img para navbar 
        $ajuste = '../';

        return view('site/edit-company', compact('empresa', 'enderecoData', 'ajuste'));
    }

    public function storeData(Request $request)
    {
        // Obter o empresa que quer fazer a atualização
        $user = User::with('empresa')->find(auth()->user()->id);
        
        $data = $request->except('_token');

        // dd($data['cep']);

        // Salvar o endereço da empresa
        $data['endereco'] = $data['logradouro'] . ", " . $data['numero'];

        // Atualizar usuário
        $user->update([
            'email' => $data['email']
        ]);

        // Atualizar empresa usando o relacionamento
        $user->empresa->update([
            'nm_fantasia' => $data['nm_fantasia'],   
            'razao_social' => $data['razao_social'], 
            'cep' => $data['cep'], 
            'endereco' => $data['endereco'],    
        ]);

        // Atualizar representante usando o relacionamento
        $update_representante = $user->empresa->representante->update([
            'nm_representante' => $data['nm_representante'],
            'cpf_representante' => $data['cpf_representante'],
            'telefone_comercial' => $data['telefone_comercial'],
            'telefone_celular' => $data['telefone_celular'],
            'email' => $data['email'],
        ]);

        return redirect()->route('empresa.data-edit');
    }

    private function uploadImage(Request $request, $user)
    {
        // Lógica para lidar com a imagem
        if ($request->hasFile('picture__input')) {
            // Obter a imagem do usuário
            $imagem = $request->file('picture__input');

            // Gerar novo nome com extensão original
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

            // Salvar a imagem na pasta storage/app/public/uploads/empresas
            $caminhoImagem = $imagem->storeAs('public/uploads/empresas', $nomeImagem);

            $caminhoImagem = str_replace('public/', 'storage/', $caminhoImagem);

            // Excluir imagem antiga
            if ($user->nm_img) {
                Storage::delete(str_replace('storage/', 'public/', $user->nm_img));
            }

            // Atualizar usuário com a nova imagem
            $user->update([
                'nm_img' => $caminhoImagem,
            ]);
        }
    }
    
    private function enderecoUser($cep)
    {
        // Substitua a URL pelo endpoint real do ViaCEP
        $viaCepUrl = "https://viacep.com.br/ws/{$cep}/json/";

        // Crie uma instância do cliente Guzzle
        $client = new Client();

        try {
            // Faça a requisição à API do ViaCEP
            $response = $client->get($viaCepUrl);

            // Obtenha os dados da resposta em formato JSON
            $enderecoData = json_decode($response->getBody(), true);

            // Retorne os dados do endereço
            return $enderecoData;
        } catch (\Exception $e) {
            // Se houver um erro na requisição, você pode lidar com ele aqui
            return null;
        }
    }

    public function filtersVagas(Request $request)
    {
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();

        // Lógica de filtro
        $vagas = Vaga::where('id_status', 1);

        // Filtro de busca por título
        if ($request->filled('searchName')) {
            $vagas->where('titulo', 'like', '%' . $request->input('searchName') . '%');
        }

        // Filtro por período de estágio
        $periodosSelected = (array) request('periodos', []);
        if (!empty($periodosSelected)) {
            $vagas->whereIn('id_periodo', $periodosSelected);
        }

        // Filtro por modalidade de estágio
        $modalidadesSelected = (array) request('modalidades', []);
        if (!empty($modalidadesSelected)) {
            $vagas->whereIn('id_modalidade', $modalidadesSelected);
        }

        // Filtro por categoria de estágio
        $categoriaSelected = request('categoria');
        if ($categoriaSelected) {
            $vagas->where('id_categoria', $categoriaSelected);
        }

        // Filtro por valor mínimo
        $valorMinimo = request('valor_minimo');
        if ($valorMinimo !== null) {
            $vagas->where('salario', '>=', $valorMinimo);
        }

        // Filtro por valor máximo
        $valorMaximo = request('valor_maximo');
        if ($valorMaximo !== null) {
            $vagas->where('salario', '<=', $valorMaximo);
        }

        // Execute a consulta
        $vagas = $vagas->paginate(8);

        // Retorne a view com os resultados
        return view('site/jobs-company', compact('vagas', 'periodos', 'categorias', 'modalidades'));
    }

    public function jobsCompany()
    {
        $company = auth()->user()->empresa;
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();
        
        $vagas = Vaga::where('id_empresa', $company->id)
                ->orderBy('id_status', 'asc')
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        
        // echo '<pre>';
        // var_dump($vagas);

        $ajuste = '../';

        return view('site/jobs-company', compact('vagas', 'periodos', 'categorias', 'modalidades', 'ajuste'));
    }

    public function showCandidatos($id)
    {
        $candidatos = Candidatura::where('id_vaga', $id)
                                    ->get();
        
        $ajuste = '../../../';

        return view('site/company-jobs-users', compact('candidatos', 'ajuste'));
    }
}
