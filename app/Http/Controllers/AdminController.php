<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Estudante;
use App\Models\Modalidade;
use App\Models\Periodo;
use App\Models\Sexo;
use App\Models\User;
use App\Models\Vaga;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/home');
    }

    // Manipular estudantes

    public function index_students()
    {
        $estudantes = Estudante::all();

        return view('admin/students', compact('estudantes'));
    }

    public function editDataStudent($id)
    {
        $estudante = Estudante::find($id);

        $endereco = $this->enderecoUser($estudante->cep);
        $sexos = Sexo::all();

        return view('admin/edit-student', compact('estudante', 'sexos', 'endereco'));
    }

    public function storeDataStudent(Request $request)
    {
        // Pegar os valores do formulário
        $data = $request->except('_token');

        // Obter o estudante que quer fazer a atualização
        $estudante = Estudante::with('user')->find($data['id_estudante']);

        // Obter o id de usuario do estudante
        $user = $estudante->user;

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

        return redirect()->route('admin.student.data-edit', $estudante->id);
    }

    public function destroyStudent($id)
    {
        $user = User::findOrFail($id);

        // Excluir registros relacionados na tabela 'estudantes'
        $user->estudante->delete();
    
        if ($user->estudante->contato) {
            $user->estudante->contato->delete();
        }
    
        if ($user->estudante->estudante_cursos) {
            $user->estudante->estudante_cursos->delete();
        }
    
        if ($user->estudante->experiencia) {
            // Iterar sobre cada experiência e excluir
            foreach ($user->estudante->experiencia as $experiencia) {
                $experiencia->delete();
            }
        }
    
        if ($user->estudante->candidatura) {
            foreach ($user->estudante->candidatura as $candidatura) {
                $candidatura->delete();
            }
        }
    
        // Agora você pode excluir o usuário
        $user->delete();
    
        return redirect()->route('admin.students');
    }

    // Manipular empresas

    public function index_companys()
    {
        $empresas = Empresa::all();

        return view('admin/companys', compact('empresas'));
    }

    public function editDataCompany($id)
    {
        $empresa = Empresa::with('user')->find($id);
        $empresa->numero = preg_replace('/\D/', '', $empresa->endereco);
        $enderecoData = $this->enderecoUser($empresa->cep);
        
        //ajuste no caminho da img para navbar 
        $ajuste = true;

        return view('admin/edit-company', compact('empresa', 'enderecoData', 'ajuste'));
    }

    public function storeDataCompany(Request $request)
    {
        $data = $request->except('token');

        // Obter o estudante que quer fazer a atualização
        $empresa = Empresa::with('user')->find($data['id_empresa']);

        // Obter o id de usuario do estudante
        $user = $empresa->user;
 
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

        return redirect()->route('admin.empresa.data-edit', $empresa->id);
    }

    public function destroyCompany($id)
    {
        $user = User::findOrFail($id);

        // dd($user->empresa);
        // Se houver vagas associadas, exclua cada vaga
        if ($user->empresa->vagas) {
            foreach ($user->empresa->vagas as $vaga) {
                $vaga->delete();
            }
        }

        $user->empresa->delete();
        
        return redirect()->route('admin.companys');
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

    // Manipular vagas

    public function index_jobs()
    {
        $vagas = Vaga::all();

        return view('admin/jobs', compact('vagas'));
    }
    
    public function editDataJob($id)
    {
        $modalidades = Modalidade::all();
        $categorias = Categoria::all();
        $periodos = Periodo::all();

        $vaga = Vaga::find($id); 
        
        return view('admin/edit-Jobs', compact('vaga', 'modalidades', 'categorias', 'periodos'));
    }

    public function storeDataJob(Request $request)
    {
        // Pegar os valores do formulário
        $data = $request->except('_token');

        // Obter o estudante que quer fazer a atualização
        $estudante = Estudante::with('user')->find($data['id_estudante']);

        // Obter o id de usuario do estudante
        $user = $estudante->user;

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

        return redirect()->route('admin.student.data-edit', $estudante->id);
    }

    public function destroyJob($id)
    {
        $vaga = Vaga::findOrFail($id);

        $vaga->delete();
        
        return redirect()->route('admin.jobs');
    }
}
