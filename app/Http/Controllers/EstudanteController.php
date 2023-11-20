<?php

namespace App\Http\Controllers;

use App\Models\ContatoEstudante;
use App\Models\Curso;
use App\Models\Estudante;
use App\Models\ModalidadeVaga;
use App\Models\Periodo;
use App\Models\Sexo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class EstudanteController extends Controller
{   
    public readonly Estudante $estudante;
    public readonly User $user;
    public readonly Curso $curso;
    public readonly ContatoEstudante $contato;


    public function __construct()
    {
        $this->estudante = new Estudante();
        $this->user = new User();
        $this->curso = new Curso();
        $this->contato = new ContatoEstudante();
    }

    public function create()
    {
        $sexos = Sexo::all();

        return view('site/student-register', compact('sexos'));
    }

    public function teste()
    {
        $sexos = Sexo::all();
        $modalidades = ModalidadeVaga::all();
        $periodos = Periodo::all();

        return view('site/teste', compact('sexos','modalidades', 'periodos'));  
    }

    public function store(Request $request)
    {
        // Recuperar dados do formulário, exceto os que estão em except
        $data = $request->except('_token');

        // echo '<pre>';
        //     dd($data['cep']);
        // echo '<pre>';


        // Juntar o valor inteiro e sua unidade para salvar no banco
        // $data['tempo'] = $data['tempo'] . ' ' . $data['tempo_unidade'];

        $data['idade'] = \Carbon\Carbon::parse($data['data_nasc'])->diffInYears();

        // Obter a imagem do usuário
        $imagem = $request->file('picture__input');

        // Gerar novo nome com extensão original
        $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

        // Salvar a imagem na pasta storage/app/public/uploads/estudantes
        $caminhoImagem = $imagem->storeAs('public/uploads/estudantes', $nomeImagem);

        // Criar usuário
        $create_user = $this->user->create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'senha' => Hash::make($data['password']),
            'nm_img' => str_replace('public/', 'storage/', $caminhoImagem), // Corrigindo o caminho
            'tipo' => 'estudante',
        ]);

        // Criar contato
        $create_contato = ContatoEstudante::create([
            'telefone_celular' => $data['telefone'],
            'email' => $data['email'],
        ]);

        $user = $create_user; // Obtém o estudante recém-criado

        // Criar estudante usando o relacionamento
        $user->estudante()->create([
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

    public function showMyProfile($id_user)
    {
        // Encontrar o usuário pelo ID
        $user = User::find($id_user);

        // dd($user->estudante->cpf);

        // // Verificar se o usuário foi encontrado
        // if ($user) {
        //     // Verificar se o usuário tem um estudante associado
        //     if ($user->estudante) {
        //         // Se sim, obter o CEP
        //         $cep = $user->estudante->cep;

        //         dd($cep);
        //         // // Chamar a função para obter os dados do endereço
        //         // $enderecoData = $this->enderecoUser($cep);

        //         // echo '<pre>';
        //         // var_dump($enderecoData);
        //         // echo '</pre>';
        //     } else {
        //         // Caso o usuário não tenha um estudante associado
        //         // Faça algo apropriado, como redirecionar para uma página de erro
        //         return redirect()->route('pagina_de_erro');
        //     }
        // } else {
        //     // Caso o usuário não seja encontrado
        //     // Faça algo apropriado, como redirecionar para uma página de erro
        //     return redirect()->route('pagina_de_erro');
        // }

        $estudante = $user->estudante;

        return view('site/logged-student-profile', compact('user'));
    }


    public function addCurso(Request $request)
    {
        $data = $request->except('_token');

    }

    private function dadosEstudante($id_user)
    {
        $dadosUser = User::select(
            'users.*',
            'cursos.nome as curso',
            'escola.nome as status',
            'modalidades_vaga.tipo as modalidade', 
        )
        ->join('status', 'vagas.id_status', 'status.id')
        ->join('modalidades_vaga', 'vagas.id_modalidade', 'modalidades_vaga.id')
        ->join('empresas', 'vagas.id_empresa', 'empresas.id')
        ->join('users', 'empresas.id_user', 'users.id');
        
        return $dadosUser;

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

