<?php

namespace App\Http\Controllers;

use App\Models\ContatoEmpresa;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{
    public readonly Empresa $empresa;
    public readonly User $user;
    public readonly ContatoEmpresa $contato;


    public function __construct()
    {
        $this->empresa = new Empresa();
        $this->user = new User();
        $this->contato = new ContatoEmpresa();
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
        $data['endereco'] = $data['logradouro'] . "-" . $data['numero'];

        //  dd($data);      

        if(empty($data['picture__input'])) 
        {

            // Criar usuário
            $create_user = $this->user->create([
                'nome' => $data['nm_fantasia'],
                'email' => $data['email'],
                'senha' => Hash::make($data['senha']),  
                'tipo' => 'empresa',
            ]);

        } else {
            
             // Obter a imagem do usuário
             $imagem = $request->file('picture__input');

             // Gerar novo nome com extensão original
             $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
 
             // Salvar a imagem na pasta storage/app/public/uploads/estudantes
             $caminhoImagem = $imagem->storeAs('public/uploads/empresas', $nomeImagem);
 
             // Criar usuário
             $create_user = $this->user->create([
                 'nome' => $data['nm_fantasia'],
                 'email' => $data['email'],
                 'senha' => Hash::make($data['senha']),
                 'nm_img' => str_replace('public/', 'storage/', $caminhoImagem), // Corrigindo o caminho
                 'tipo' => 'empresa',
             ]);

        }

        // Criar contato
        $create_contato = ContatoEmpresa::create([
            'nm_representante' => $data['nm_representante'],
            'telefone_comercial' => $data['tel_empresa'],
            'telefone_celular' => $data['tel_representante'],
            'email' => $data['email'],
        ]);

        $user = $create_user; // Obtém a empresa recém-criado

        // $contato = $create_contato; // Obtém a empresa recém-criado

        // dd($create_contato->id,
        //     $create_user->id);

        if ($create_contato) {

            // dd($data['nm_representante']);

            // Criar estudante usando o relacionamento
            $user->empresa()->create([
                'nm_fantasia' => $data['nm_fantasia'],
                'cnpj' => $data['cnpj'],
                'razao_social' => $data['razao_social'],
                'descricao' => $data['sobre'],
                'endereco' => $data['endereco'],
                'cep' => $data['cep'],
                'id_contato' => $create_contato->id,
            ]);
        }

        Auth::login($create_user);

        return redirect()->route('index');
    }
}
