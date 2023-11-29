<?php

namespace App\Http\Controllers;

use App\Models\ContatoEstudante;
use App\Models\Curso;
use App\Models\Escola;
use App\Models\Estudante;
use App\Models\EstudanteCurso;
use App\Models\Experiencia;
use App\Models\Modalidade;
use App\Models\Periodo;
use App\Models\Sexo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\select;

class EstudanteController extends Controller
{   
    public readonly Estudante $estudante;
    public readonly User $user;
    public readonly Curso $curso;
    public readonly ContatoEstudante $contato;
    public readonly Experiencia $exp;
    public readonly EstudanteCurso $estudante_curso;


    public function __construct()
    {
        $this->estudante = new Estudante();
        $this->user = new User();
        $this->curso = new Curso();
        $this->contato = new ContatoEstudante();
        $this->exp = new Experiencia();
        $this->estudante_curso = new EstudanteCurso();
    }

    public function create()
    {
        $sexos = Sexo::all();

        return view('site/student-register', compact('sexos'));
    }

    public function teste()
    {
        $sexos = Sexo::all();
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();

        return view('site/teste', compact('sexos','modalidades', 'periodos'));  
    }

    public function store(Request $request)
    {
        // Obter dados do formulário, exceto os que estão em except
        $data = $request->except('_token');

        // Juntar o valor inteiro e sua unidade para salvar no banco
        $data['idade'] = \Carbon\Carbon::parse($data['data_nasc'])->diffInYears();

        // Criar usuário
        $create_user = $this->createUser($data);

        // Criar contato
        $create_contato = ContatoEstudante::create([
            'telefone_celular' => $data['telefone'],
            'email' => $data['email'],
        ]);

        // Criar estudante usando o relacionamento
        $create_user->estudante()->create([
            'id_sexo' => $data['sexo'],
            'nome' => $data['nome'],
            'cpf' => $data['cpf'],
            'data_nasc' => $data['data_nasc'],
            'idade' => $data['idade'],
            'sobre' => $data['sobre'],
            'cep' => $data['cep'],
            'id_contato' => $create_contato->id,
        ]);

        Auth::login($create_user);

        return redirect()->route('index');
    }

    public function show($id)
    {
        $cursos = Curso::all();
        $escolas = Escola::all();
        $periodos = Periodo::all();
        $modalidades = Modalidade::all();

        $user = User::find($id);
        
        $cep = $user->estudante->cep;

        $enderecoData = $this->enderecoUser($cep);

        $experiencias = $this->infoExp($user->estudante->id);

        $datacursos = $this->infoCurso($user->estudante->id);

        $ajuste = true;
        
        return view('site/student-profile', compact('user', 'enderecoData', 'cursos', 'escolas', 'periodos', 'modalidades', 'experiencias', 'datacursos', 'ajuste'));

        // return redirect()->route('index');
    }

    public function showProfile()
    {
        $cursos = Curso::all();
        $escolas = Escola::all();
        $periodos = Periodo::all();
        $modalidades = Modalidade::all();

        // Encontrar o usuário pelo ID
        $user = auth()->user();

        // Verificar se o usuário foi encontrado
        if ($user) {
            // Verificar se o usuário tem um estudante associado
            if ($user->estudante) {
                // Se sim, obter o CEP
                $cep = $user->estudante->cep;

                // Chamar a função para obter os dados do endereço
                $enderecoData = $this->enderecoUser($cep);

                // Chamar a função para obter as exoeriências do estudante
                $experiencias = $this->infoExp($user->estudante->id);

                // Chamar a função para obter os cursos do estudante
                $datacursos = $this->infoCurso($user->estudante->id);

                $ajuste = true;
                
                return view('site/logged-student-profile', compact('user', 'enderecoData', 'cursos', 'escolas', 'periodos', 'modalidades', 'experiencias', 'datacursos', 'ajuste'));
            }
        } else {
            return redirect()->route('index');
        }
    }


    public function addCurso(Request $request)
    {
        $data = $request->except('_token');

        $estudante = auth()->user()->estudante;

        $estudante->estudante_curso()->create([
            'id_estudante' => $estudante->id,
            'id_curso' => $data['curso'],
            'id_periodo' => $data['periodo'],
            'ano_inicio' => $data['ano_inicio'],
            'ano_fim' => $data['ano_fim']
        ]);

        return redirect()->back();
    }

    private function infoCurso($id)
    {
        $dadosCurso = EstudanteCurso::select('estudantes_cursos.*', 'cursos.nome as curso', 'escolas.nome as escola', 'periodos.nome as periodo')
        ->join('periodos', 'periodos.id', 'estudantes_cursos.id_periodo')
        ->join('cursos', 'cursos.id', 'estudantes_cursos.id_curso')
        ->join('escolas_cursos', 'escolas_cursos.id_curso', 'cursos.id')
        ->join('escolas', 'escolas.id', 'escolas_cursos.id_escola')
        ->where('estudantes_cursos.id_estudante', $id)
        ->get();

        return $dadosCurso;
    }


    public function addExp(Request $request)
    {
        $data = $request->except('_token');

        $estudante = auth()->user()->estudante;

        $estudante->experiencia()->create([
            'id_estudante' => $estudante->id,
            'id_modalidade' => $data['modalidade'],
            'descricao' => $data['descricao'],
            'tempo' => $data['tempo'],
            'empregador' => $data['nm_empresa'],
        ]);

        return redirect()->back();
    }

    private function infoExp($id)
    {
        $dadosExp = Experiencia::select('experiencias.*', 'modalidades.nome as modalidade')
        ->join('modalidades', 'modalidades.id', 'experiencias.id_modalidade')
        ->where('experiencias.id_estudante', $id)
        ->get();

        return $dadosExp;
    }

    public function destroyCursos($id)
    {
        $this->estudante_curso->where('id', $id)->delete();

        return redirect()->back();
    }

    public function destroyExp($id)
    {
        $this->exp->where('id', $id)->delete();

        return redirect()->back();
    }

    public function editProfile(Request $request)
    {
        // Obter dados do formulário
        $data = $request->except('_token');

        // Obter o estudante que quer fazer a atualização 
        $user = User::with('estudante')->find(auth()->user()->id);

        // Lógica de upload de imagem
        $this->uploadImage($request, $user);

        if(!empty($data['nome'])){
            // Atualizar outros campos do usuário, se necessário
            $user->update([
                'nome' => $data['nome'],
            ]);
        }
        
        if(!empty($data['sobre'])){
            // Atualizar outros campos do usuário, se necessário
            $user->estudante()->update([
                'sobre' => $data['sobre'],
            ]);
        }   

        // Redirecionar ou retornar uma resposta, por exemplo:
        return redirect()->route('student.profile')->with('success', 'Perfil atualizado com sucesso.');
    }

    private function uploadImage(Request $request, $user)
    {
        // Lógica para lidar com a imagem
        if ($request->hasFile('picture__input')) {
            // Obter a imagem do usuário
            $imagem = $request->file('picture__input');

            // Gerar novo nome com extensão original
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

            // Salvar a imagem na pasta storage/app/public/uploads/estudantes
            $caminhoImagem = $imagem->storeAs('public/uploads/estudantes', $nomeImagem);

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

    
    public function editData()
    {
        $user = User::with('estudante')->find(auth()->user()->id);
        $estudante = $user->estudante;
        $endereco = $this->enderecoUser($estudante->cep);
        $sexos = Sexo::all();

        //ajuste no caminho da img para navbar 
        $ajuste = true;

        return view('site/edit-student', compact('estudante', 'sexos', 'endereco', 'ajuste'));
    }

    public function storeData(Request $request)
    {
        // Obter o estudante que quer fazer a atualização
        $user = User::with('estudante')->find(auth()->user()->id);

        $data = $request->except('_token');

        // dd($data);   

        // Juntar o valor inteiro e sua unidade para salvar no banco
        $data['idade'] = \Carbon\Carbon::parse($data['data_nasc'])->diffInYears();

        // Atualizar usuário
        $user->update([
            'email' => $data['email']
        ]);

        // Atualizar contato usando o relacionamento
        $update_contato = $user->estudante->contato->update([
            'telefone_celular' => $data['telefone'],
            'email' => $data['email'],
        ]);

        // Atualizar estudante usando o relacionamento
        $user->estudante->update([
            'nome' => $data['nome'],
            'id_sexo' => $data['sexo'],
            'data_nasc' => $data['data_nasc'],
            'idade' => $data['idade'],
            'cep' => $data['cep'],
        ]);

        return redirect()->route('estudante.data-edit');
    }

    private function createUser($data)
    {
        // Lógica para lidar com a imagem
        if (!empty($data['picture__input'])) {
            // Obter a imagem do usuário
            $imagem = $data['picture__input'];

            // Gerar novo nome com extensão original
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

            // Salvar a imagem na pasta storage/app/public/uploads/estudantes
            $caminhoImagem = $imagem->storeAs('public/uploads/estudantes', $nomeImagem);
    
            $data['nm_img'] = str_replace('public/', 'storage/', $caminhoImagem);
        }

        // Criar usuário
        return $this->user->create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'senha' => bcrypt($data['password']),
            'nm_img' => $data['nm_img'] ?? null,
            'tipo' => 'estudante',
        ]);
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
}

