<?php

namespace Database\Seeders;

use App\Models\CategoriaVaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ContatoEmpresa;
use App\Models\ContatoEstudante;
use App\Models\Conversa;
use App\Models\Curso;
use App\Models\Empresa;
use App\Models\Escola;
use App\Models\escolaCurso;
use App\Models\Estudante;
use App\Models\Experiencia;
use App\Models\Mensagem;
use App\Models\ModalidadeVaga;
use App\Models\ParticipanteConversa;
use App\Models\Periodo;
use App\Models\Sexo;
use App\Models\Status;
use App\Models\User;
use App\Models\Vaga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run(): void
    {
        //Inserir modalidades de vagas - tabela 'modalidades_vaga'
        ModalidadeVaga::insert([
            ['nome' => 'Presencial'],
            ['nome' => 'Hibrído'],
            ['nome' => 'Remoto'],
        ]);

        //Inserir sexos - tabela 'sexos'
        Sexo::insert([
            ['nome' => 'Masculino'],
            ['nome' => 'Feminino'],
            ['nome' => 'Outro']
        ]);

        Periodo::insert([
            ['nome' => 'Integral'],
            ['nome' => 'Matutino'],
            ['nome' => 'Vespertino'],
            ['nome' => 'Noturno']
        ]);

        //Inserir status de vagas - tabela 'status'
        Status::insert([
            ['nome' => 'Ativo'],
            ['nome' => 'Inativo']
        ]);

        //Inserir categoria - tabela 'categoria_vaga'
        CategoriaVaga::insert([
            [
                'nome' => 'Tecnologia',
                'nm_img' => 'imgs/index/tecno-image.jpg'
            ],
            [
                'nome' => 'Marketing',
                'nm_img' => 'imgs/index/marketing-image.jpg'
            ],
            [
                'nome' => 'Administração',
                'nm_img' => 'imgs/index/adm-image.jpg'
            ],
            [
                'nome' => 'Logistíca',
                'nm_img' => 'imgs/index/log-image.jpg'
            ],
            [
                'nome' => 'Química',
                'nm_img' => 'imgs/index/quimica-image.jpg'
            ],
            [
                'nome' => 'Segurança do Trabalho',
                'nm_img' => 'imgs/index/seg-image.jpg'
            ]
        ]);

        // Inserir dados para a tabela 'users'
        User::insert([
            [
                'nome' => 'Mateus Sampaio',
                'email' => 'estudante@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'uploads/estudantes/img-example.jpg',
                'tipo' => 'estudante',
                'created_at' => now()
            ],
            [
                'nome' => 'Scorpius Enterprise',
                'email' => 'empresa@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'uploads/estudantes/img-example.jpg',
                'tipo' => 'empresa',
                'created_at' => now()
            ]
        ]);

        Escola::insert([
            [
                'nome' => 'Etec de Praia Grande Sede',
                'created_at' => now()
            ],
            [
                'nome' => 'Etec de Praia Grande Extensão',
                'created_at' => now()
            ],
        ]);

        Curso::insert([
            ['nome' => 'Informática para a Internet'],
            ['nome' => 'Administração'],
            ['nome' => 'Marketing'],
            ['nome' => 'Segurança do trabalho'],
            ['nome' => 'Química'],
            ['nome' => 'Logistica'],
        ]);

        escolaCurso::insert([
            [
                'id_escola' => 2,
                'id_curso' => 1,
            ],
            [
                'id_escola' => 2,
                'id_curso' => 2,
            ],
            [
                'id_escola' => 2,
                'id_curso' => 3,
            ],
            [
                'id_escola' => 2,
                'id_curso' => 4,
            ],
            [
                'id_escola' => 1,
                'id_curso' => 5,
            ],
            [
                'id_escola' => 1,
                'id_curso' => 6,
            ]
        ]);
        
        //     [
        //         'nome' => 'Carlos Santos',
        //         'email' => 'carlos.santos@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',                
        //         'tipo' => 'estudante',
        //         'created_at' => now()],
        //     [
        //         'nome' => 'Ana Costa',
        //         'email' => 'ana.costa@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now()
        //     ],
        //     [
        //         'nome' => 'Lucas Almeida',
        //         'email' => 'lucas.almeida@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now()
        //     ],
        //     [
        //         'nome' => 'Mariana Santos',
        //         'email' => 'mariana.santos@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Rafael Oliveira',
        //         'email' => 'rafael.oliveira@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Amanda Souza',
        //         'email' => 'amanda.souza@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Felipe Lima',
        //         'email' => 'felipe.lima@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'esudante',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Juliana Pereira',
        //         'email' => 'juliana.pereira@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'esudante',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Gustavo Silva',
        //         'email' => 'gustavo.silva@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'esudante',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Camila Santos',
        //         'email' => 'camila.santos@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'nome' => 'Pedro Costa',
        //         'email' => 'pedro.costa@exemplo.com',
        //         'senha' => Hash::make('123'),
        //         'nm_img' => 'uploads/estudantes/img-example.jpg',
        //         'tipo' => 'empresa',
        //         'created_at' => now(),
        //     ],
        // ]);

        // // Inserir dados para a tabela 'contato_estudante'
        // ContatoEmpresa::insert([
        //     [
        //         'nm_representante' => 'José Oliveira',
        //         'telefone_comercial' => '1112223333',
        //         'telefone_celular' => '1112223333',
        //         'email' => 'estudante1@exemplo.com', 
        //         'created_at' => now()
        //     ],
        //     [
        //         'nm_representante' => 'José Oliveira',
        //         'telefone_comercial' => '4445556666',
        //         'telefone_celular' => '4445556666',
        //         'email' => 'estudante2@exemplo.com', 
        //         'created_at' => now()
        //     ],
        //     [
        //         'nm_representante' => 'José Oliveira',
        //         'telefone_comercial' => '7778889999',
        //         'telefone_celular' => '7778889999',
        //         'email' => 'estudante3@exemplo.com', 
        //         'created_at' => now()
        //     ],
        //     [
        //         'nm_representante' => 'José Oliveira',
        //         'telefone_comercial' => '1234567890',
        //         'telefone_celular' => '1234567890',
        //         'email' => 'estudante4@exemplo.com', 
        //         'created_at' => now()
        //     ],
        //     [
        //         'nm_representante' => 'José Oliveira',
        //         'telefone_comercial' => '9876543210',
        //         'telefone_celular' => '9876543210',
        //         'email' => 'estudante5@exemplo.com', 
        //         'created_at' => now()
        //     ],
        // ]);

        // Inserir dados para a tabela 'contato_empresa'
        ContatoEstudante::insert([
            [
                'telefone_celular' => '1112223333',
                'email' => 'jose.oliveira@empresa1.com', 
                'created_at' => now()
            ],
            [ 
                'telefone_celular' => '4445556666',
                'email' => 'fernanda.silva@empresa2.com', 
                'created_at' => now()
            ],
            [ 
                'telefone_celular' => '7778889999',
                'email' => 'ricardo.santos@empresa3.com', 
                'created_at' => now()
            ],
            [
                'telefone_celular' => '1234567890',
                'email' => 'amanda.costa@empresa4.com', 
                'created_at' => now()
            ],
            [
                'telefone_celular' => '9876543210',
                'email' => 'lucas.almeida@empresa5.com', 
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'estudantes'
        Estudante::insert([
            [
                'nome' => 'Alice Johnson',
                'data_nasc' => '1995-03-15', 
                'idade' => 21,
                'cpf' => '12345678901', 
                'cep' => '11714000', 
                'sobre' => 'Graduanda em Ciência da Computação',
                'id_contato' => 2,
                'id_user' => 1,
                'id_sexo' => 2,
                'created_at' => now()
            ],
            [
                'nome' => 'Clara Oliveira',
                'data_nasc' => '1993-09-18', 
                'idade' => 21,
                'cpf' => '23456789012', 
                'cep' => '11714000', 
                'sobre' => 'Estudante de Medicina',
                'id_contato' => 1,
                'id_user' => 2,
                'id_sexo' => 2,
                'created_at' => now()
            ],
        ]);

        // // Inserir dados para a tabela 'experiencias'
        // Experiencia::insert([
        //     [
        //         'id_estudante' => 1,
        //         'id_modalidade' => 1,
        //         'empregador' => 'Tech Co',
        //         'descricao' => 'Estágio em desenvolvimento web',
        //         'tempo' => '6 meses',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'id_estudante' => 2,
        //         'id_modalidade' => 2,
        //         'empregador' => 'Finance Corp',
        //         'descricao' => 'Trabalho parcial em análise financeira',
        //         'tempo' => '1 ano',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'id_estudante' => 3,
        //         'id_modalidade' => 3,
        //         'empregador' => 'Hospital XYZ',
        //         'descricao' => 'Estágio em atendimento ao paciente',
        //         'tempo' => '8 meses',
        //         'created_at' => now(),
        //     ],
        // ]);


        // // Inserir dados para a tabela 'empresas'
        // Empresa::insert([
        //     [
        //         'cnpj' => '12345678901234',
        //         'nm_fantasia' => 'Tech Co',
        //         'razao_social' => 'Empresa de Tecnologia', 
        //         'nm_site_empresa' => 'http://techco.com', 
        //         'descricao' => 'Principal provedora de soluções tecnológicas', 
        //         'endereco' => '123 Rua da Tecnologia', 
        //         'id_contato' => 1,
        //         'id_user' => 7,
        //         'created_at' => now()
        //     ],
        //     [
        //         'cnpj' => '98765432109876',
        //         'nm_fantasia' => 'Finance Corp',
        //         'razao_social' => 'Corporação Financeira', 
        //         'nm_site_empresa' => 'http://financecorp.com', 
        //         'descricao' => 'Serviços financeiros inovadores', 
        //         'endereco' => '456 Avenida Financeira', 
        //         'id_contato' => 2,
        //         'id_user' => 8,
        //         'created_at' => now()
        //     ],
        //     [
        //         'cnpj' => '56789012345678',
        //         'nm_fantasia' => 'Saúde Total',
        //         'razao_social' => 'Clínica de Saúde', 
        //         'nm_site_empresa' => 'http://saude-total.com', 
        //         'descricao' => 'Cuidando da sua saúde com excelência', 
        //         'endereco' => '789 Rua da Saúde', 
        //         'id_contato' => 3,
        //         'id_user' => 6, 
        //         'created_at' => now()
        //     ],
        // ]);

        // // Inserir dados para a tabela 'escolas'
        // Escola::insert([
        //     ['nome' => 'Etec de Praia Grande Sede'],
        //     ['nome' => 'Etec de Praia Grande Extensão']
        // ]);

        // Curso::insert([
        //     [
        //         'id_escola' => 1,
        //         'id_periodo' => 2,
        //         'nome' => 'Química',
        //         'ano_inicio' => 2022,
        //         'ano_fim' => 2025,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id_escola' => 2,
        //         'id_periodo' => 1,
        //         'nome' => 'Informática para a internet',
        //         'ano_inicio' => 2021,
        //         'ano_fim' => 2024,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id_escola' => 2,
        //         'id_periodo' => 1,
        //         'nome' => 'Segurança do Trabalho',
        //         'ano_inicio' => 2023,
        //         'ano_fim' => 2026,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // // Inserir dados para a tabela 'vagas'
        // Vaga::insert([
        //     [
        //         'id_modalidade' => 2,
        //         'id_empresa' => 1, 
        //         'id_status' => 1,
        //         'id_categoria_vaga' => 1,
        //         'titulo' => 'Desenvolvedor Web', 
        //         'descricao' => 'Oportunidade para desenvolver aplicações web inovadoras',
        //         'salario' => 5000.00, 
        //         'data_expiracao' => '2023-12-01',
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_modalidade' => 1,
        //         'id_empresa' => 2, 
        //         'id_status' => 1,
        //         'id_categoria_vaga' => 2,
        //         'titulo' => 'Analista Financeiro', 
        //         'descricao' => 'Procuramos um profissional para análise e gestão financeira',
        //         'salario' => 4500.00, 
        //         'data_expiracao' => '2023-12-15',
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_modalidade' => 3,
        //         'id_empresa' => 3, 
        //         'id_status' => 1,
        //         'id_categoria_vaga' => 1,
        //         'titulo' => 'Médico Residente', 
        //         'descricao' => 'Vaga para médico residente na especialidade de pediatria',
        //         'salario' => 6000.00, 
        //         'data_expiracao' => '2023-11-30',
        //         'created_at' => now()
        //     ],
        // ]);

        // // Inserir dados para a tabela 'conversas'
        // Conversa::insert([
        //     ['created_at' => now()],
        //     ['created_at' => now()],  
        //     ['created_at' => now()],
        // ]);

        // // Inserir dados para a tabela 'participantes_conversa'
        // ParticipanteConversa::insert([
        //     [
        //         'id_conversa' => 1, 
        //         'id_user' => 2,
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 1, 
        //         'id_user' => 7,
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 2, 
        //         'id_user' => 3,
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 3, 
        //         'id_user' => 4,
        //         'created_at' => now()
        //     ],
        // ]);

        // // Inserir dados para a tabela 'mensagens'
        // Mensagem::insert([
        //     [
        //         'id_conversa' => 1, 
        //         'id_user' => 2, 'texto' => 'Olá, estamos interessados na sua vaga!',
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 1, 
        //         'id_user' => 7, 'texto' => 'Ótimo! Podemos agendar uma entrevista?',
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 2, 
        //         'id_user' => 3, 'texto' => 'Qual é a carga horária do trabalho?',
        //         'created_at' => now()
        //     ],
        //     [
        //         'id_conversa' => 3, 
        //         'id_user' => 4, 'texto' => 'Gostaríamos de saber mais sobre a vaga de médico residente.',
        //         'created_at' => now()
        //     ],
        // ]);
    }
}
