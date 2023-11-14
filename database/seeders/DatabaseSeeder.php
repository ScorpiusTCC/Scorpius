<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ContatoEmpresa;
use App\Models\ContatoEstudante;
use App\Models\Conversa;
use App\Models\Curso;
use App\Models\Empresa;
use App\Models\Estudante;
use App\Models\Mensagem;
use App\Models\ParticipanteConversa;
use App\Models\User;
use App\Models\UserEmpresa;
use App\Models\UserEstudante;
use App\Models\Vaga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Inserir dados para a tabela 'users'
        User::insert([
            [
                'nome' => 'Admin',
                'email' => 'admin@gmail.com',
                'senha' => Hash::make('admin'),
                'created_at' => now()],
            [

                'nome' => 'João Silva',
                'email' => 'joao.silva@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now()],
            [

                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now()],
            [

                'nome' => 'Carlos Santos',
                'email' => 'carlos.santos@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now()],
            [

                'nome' => 'Ana Costa',
                'email' => 'ana.costa@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now()],
            [

                'nome' => 'Lucas Almeida',
                'email' => 'lucas.almeida@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now()
            ],
            [
                'nome' => 'Mariana Santos',
                'email' => 'mariana.santos@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Rafael Oliveira',
                'email' => 'rafael.oliveira@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Amanda Souza',
                'email' => 'amanda.souza@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Felipe Lima',
                'email' => 'felipe.lima@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Juliana Pereira',
                'email' => 'juliana.pereira@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Gustavo Silva',
                'email' => 'gustavo.silva@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Camila Santos',
                'email' => 'camila.santos@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
            [
                'nome' => 'Pedro Costa',
                'email' => 'pedro.costa@exemplo.com',
                'senha' => Hash::make('123'),
                'created_at' => now(),
            ],
        ]);

        // Inserir dados para a tabela 'contato_estudante'
        ContatoEstudante::insert([
            [
                'celular' => '1112223333',
                'email' => 'estudante1@exemplo.com', 
                'created_at' => now()
            ],
            [
                'celular' => '4445556666',
                'email' => 'estudante2@exemplo.com', 
                'created_at' => now()
            ],
            [
                'celular' => '7778889999',
                'email' => 'estudante3@exemplo.com', 
                'created_at' => now()
            ],
            [
                'celular' => '1234567890',
                 'email' => 'estudante4@exemplo.com', 
                'created_at' => now()
            ],
            [
                'celular' => '9876543210',
                'email' => 'estudante5@exemplo.com', 
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'contato_empresa'
        ContatoEmpresa::insert([
            [
                'nm_representante' => 'José Oliveira', 
                'celular' => '1112223333',
                'email' => 'jose.oliveira@empresa1.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 'Fernanda Silva', 
                'celular' => '4445556666',
                'email' => 'fernanda.silva@empresa2.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 'Ricardo Santos', 
                'celular' => '7778889999',
                'email' => 'ricardo.santos@empresa3.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 
                'Amanda Costa', 
                'celular' => '1234567890',
                'email' => 'amanda.costa@empresa4.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 
                'Lucas Almeida', 
                'celular' => '9876543210',
                'email' => 'lucas.almeida@empresa5.com', 
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'estudantes'
        Estudante::insert([
            [
                'nome' => 'Alice Johnson',
                'data_de_nascimento' => '1995-03-15', 
                'cpf' => '12345678901', 
                'ano_cursado' => 4, 
                'sobre' => 'Graduanda em Ciência da Computação',
                'habilidades' => 'Programação, Gerenciamento de Banco de Dados', 
                'experiencias' => 'Estágio na Tech Co', 
                'endereco' => '456 Rua do Campus', 
                'id_contato' => 2,
                'created_at' => now()],
            [
                'nome' => 'Bob Smith',
                'data_de_nascimento' => '1998-06-22', 
                'cpf' => '98765432109', 
                'ano_cursado' => 2, 
                'sobre' => 'Estudante de Administração de Empresas',
                'habilidades' => 'Marketing, Vendas', 
                'experiencias' => 'Trabalho parcial na Finance Corp', 
                'endereco' => '789 Rua do Estudante', 
                'id_contato' => 3,
                'created_at' => now()
            ],
            [
                'nome' => 'Clara Oliveira',
                'data_de_nascimento' => '1993-09-18', 
                'cpf' => '23456789012', 
                'ano_cursado' => 3, 
                'sobre' => 'Estudante de Medicina',
                'habilidades' => 'Atendimento ao paciente, Pesquisa Médica', 
                'experiencias' => 'Estágio no Hospital XYZ', 
                'endereco' => '101 Avenida da Saúde', 
                'id_contato' => 4,
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'empresas'
        Empresa::insert([
            [
                'cnpj' => '12345678901234',
                'nm_fantasia' => 'Tech Co',
                'razao_social' => 'Empresa de Tecnologia', 
                'nm_site_empresa' => 'http://techco.com', 
                'descricao' => 'Principal provedora de soluções tecnológicas', 
                'endereco' => '123 Rua da Tecnologia', 
                'id_contato' => 5,
                'created_at' => now()
            ],
            [
                'cnpj' => '98765432109876',
                'nm_fantasia' => 'Finance Corp',
                'razao_social' => 'Corporação Financeira', 
                'nm_site_empresa' => 'http://financecorp.com', 
                'descricao' => 'Serviços financeiros inovadores', 
                'endereco' => '456 Avenida Financeira', 
                'id_contato' => 3,
                'created_at' => now()
            ],
            [
                'cnpj' => '56789012345678',
                'nm_fantasia' => 'Saúde Total',
                'razao_social' => 'Clínica de Saúde', 
                'nm_site_empresa' => 'http://saude-total.com', 
                'descricao' => 'Cuidando da sua saúde com excelência', 
                'endereco' => '789 Rua da Saúde', 
                'id_contato' => 1,
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'user_empresa'
        UserEmpresa::insert([
            [
                'id_user' => 7,
                'id_empresa' => 1,
                'created_at' => now(),
            ],
            [
                'id_user' => 8,
                'id_empresa' => 2,
                'created_at' => now(),
            ],
            [
                'id_user' => 9,
                'id_empresa' => 3,
                'created_at' => now(),
            ],
        ]);

        // Inserir dados para a tabela 'user_estudante'
        UserEstudante::insert([
            [
                'id_user' => 2,
                'id_estudante' => 1,
                'created_at' => now(),
            ],
            [
                'id_user' => 3,
                'id_estudante' => 2,
                'created_at' => now(),
            ],
            [
                'id_user' => 4,
                'id_estudante' => 3,
                'created_at' => now(),
            ],
        ]);


        // Inserir dados para a tabela 'cursos'
        Curso::insert([
            [
                'nome' => 'Ciência da Computação', 
                'periodo_curso' => 'Noturno',
                'created_at' => now()
            ],
            [
                'nome' => 'Administração de Empresas', 
                'periodo_curso' => 'Matutino',
                'created_at' => now()
            ],
            [
                'nome' => 'Medicina', 
                'periodo_curso' => 'Integral',
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'vagas'
        Vaga::insert([
            [
                'id_empresa' => 1, 
                'titulo' => 'Desenvolvedor Web', 
                'descricao' => 'Oportunidade para desenvolver aplicações web inovadoras',
                'vl_salario' => 5000.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_empresa' => 2, 
                'titulo' => 'Analista Financeiro', 
                'descricao' => 'Procuramos um profissional para análise e gestão financeira',
                'vl_salario' => 4500.00, 
                'data_expiracao' => '2023-12-15',
                'created_at' => now()
            ],
            [
                'id_empresa' => 3, 
                'titulo' => 'Médico Residente', 
                'descricao' => 'Vaga para médico residente na especialidade de pediatria',
                'vl_salario' => 6000.00, 
                'data_expiracao' => '2023-11-30',
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'conversas'
        Conversa::insert([
            ['created_at' => now()],
            ['created_at' => now()],  
            ['created_at' => now()],
        ]);

        // Inserir dados para a tabela 'participantes_conversa'
        ParticipanteConversa::insert([
            [
                'id_conversa' => 1, 
                'id_user' => 2,
                'created_at' => now()
            ],
            [
                'id_conversa' => 1, 
                'id_user' => 7,
                'created_at' => now()
            ],
            [
                'id_conversa' => 2, 
                'id_user' => 3,
                'created_at' => now()
            ],
            [
                'id_conversa' => 3, 
                'id_user' => 4,
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'mensagens'
        Mensagem::insert([
            [
                'id_conversa' => 1, 
                'id_user' => 2, 'texto' => 'Olá, estamos interessados na sua vaga!',
                'created_at' => now()
            ],
            [
                'id_conversa' => 1, 
                'id_user' => 7, 'texto' => 'Ótimo! Podemos agendar uma entrevista?',
                'created_at' => now()
            ],
            [
                'id_conversa' => 2, 
                'id_user' => 3, 'texto' => 'Qual é a carga horária do trabalho?',
                'created_at' => now()
            ],
            [
                'id_conversa' => 3, 
                'id_user' => 4, 'texto' => 'Gostaríamos de saber mais sobre a vaga de médico residente.',
                'created_at' => now()
            ],
        ]);
    }
}
