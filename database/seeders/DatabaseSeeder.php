<?php

namespace Database\Seeders;

use App\Models\Bairro;
use App\Models\Categoria;
use App\Models\ContatoEstudante;
use App\Models\Conversa;
use App\Models\Curso;
use App\Models\Empresa;
use App\Models\Escola;
use App\Models\escolaCurso;
use App\Models\Estudante;
use App\Models\Mensagem;
use App\Models\Modalidade;
use App\Models\ParticipanteConversa;
use App\Models\Periodo;
use App\Models\RepresentanteEmpresa;
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
        Modalidade::insert([
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
        Categoria::insert([
            ['nome' => 'Tecnologia', 'nm_img' => 'imgs/index/tecno-image.jpg'],
            ['nome' => 'Marketing', 'nm_img' => 'imgs/index/marketing-image.jpg'],
            ['nome' => 'Administração', 'nm_img' => 'imgs/index/adm-image.jpg'],
            ['nome' => 'Logistíca', 'nm_img' => 'imgs/index/log-image.jpg'],
            ['nome' => 'Química', 'nm_img' => 'imgs/index/quimica-image.jpg'],
            ['nome' => 'Segurança do Trabalho', 'nm_img' => 'imgs/index/seg-image.jpg']
        ]);

        //Inserir bairros - tabela 'bairros'
        Bairro::insert([
            ['nome' => 'Andaraguá'],
            ['nome' => 'Anhanguera'],
            ['nome' => 'Antartica'],
            ['nome' => 'Aviação'],
            ['nome' => 'Boqueirão'],
            ['nome' => 'Caiçara'],
            ['nome' => 'Canto do Forte'],
            ['nome' => 'Cidade da Criança'],
            ['nome' => 'Flórida'],
            ['nome' => 'Guilhermina'],
            ['nome' => 'Maracanã'],
            ['nome' => 'Melvi'],
            ['nome' => 'Militar'],
            ['nome' => 'Mirim'],
            ['nome' => 'Ocian'],
            ['nome' => 'Princesa'],
            ['nome' => 'Quietude'],
            ['nome' => 'Real'],
            ['nome' => 'Ribeirópolis'],
            ['nome' => 'Samambaia'],
            ['nome' => 'Santa Marina'],
            ['nome' => 'Sítio do Campo'],
            ['nome' => 'Solemar'],
            ['nome' => 'Tupiry'],
            ['nome' => 'Tupi'],
            ['nome' => 'Vila Sônia'],
            ['nome' => 'Xixová'],
            ['nome' => 'Esmeralda'],
            ['nome' => 'Glória'],
            ['nome' => 'Imperador'],
            ['nome' => 'Nova Mirim'],
            ['nome' => 'Serra do Mar'],
        ]);


        // Inserir dados para a tabela 'users'
        User::insert([
            [
                'nome' => 'Rodrigo Nascimento',
                'email' => 'estudante@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'storage/uploads/estudantes/1702505962_img-estudante.svg',
                'tipo' => 'estudante',
                'created_at' => now()
            ],
            [
                'nome' => 'Google',
                'email' => 'empresa@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'storage/uploads/empresas/img-google.png',
                'tipo' => 'empresa',
                'created_at' => now()
            ],
            [
                'nome' => 'Nubank',
                'email' => 'empresa1@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'storage/uploads/empresas/img-nubank.png',
                'tipo' => 'empresa',
                'created_at' => now()
            ],
            [
                'nome' => 'Matera',
                'email' => 'empresa2@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'storage/uploads/empresas/img-matera.png',
                'tipo' => 'empresa',
                'created_at' => now()
            ],
            [
                'nome' => 'Serasa',
                'email' => 'estudante3@gmail.com',
                'senha' => Hash::make('123'),
                'nm_img' => 'storage/uploads/empresas/img-serasa.png',
                'tipo' => 'empresa',
                'created_at' => now()
            ],
            [
                'nome' => 'Ana Silva',
                'email' => 'ana.silva@example.com',
                'senha' => Hash::make('senha123'),
                'nm_img' => 'storage/uploads/estudantes/img-ana.jpg',
                'tipo' => 'estudante',
                'created_at' => now()
            ],
            [
                'nome' => 'Carlos Oliveira',
                'email' => 'carlos.oliveira@example.com',
                'senha' => Hash::make('senha456'),
                'nm_img' => 'storage/uploads/estudantes/img-carlos.jpg',
                'tipo' => 'estudante',
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'escolas'
        Escola::insert([
            ['nome' => 'Etec de Praia Grande Sede', 'created_at' => now()],
            ['nome' => 'Etec de Praia Grande Extensão', 'created_at' => now()],
        ]);

        // Inserir dados para a tabela 'cursos'
        Curso::insert([
            ['nome' => 'Informática para a Internet'],
            ['nome' => 'Administração'],
            ['nome' => 'Marketing'],
            ['nome' => 'Segurança do trabalho'],
            ['nome' => 'Química'],
            ['nome' => 'Logística'],
        ]);

        // Inserir dados para a tabela 'escola_cursos'
        EscolaCurso::insert([
            ['id_escola' => 2, 'id_curso' => 1],
            ['id_escola' => 2, 'id_curso' => 2],
            ['id_escola' => 2, 'id_curso' => 3],
            ['id_escola' => 2, 'id_curso' => 4],
            ['id_escola' => 1, 'id_curso' => 5],
            ['id_escola' => 1, 'id_curso' => 6],
        ]);

        // Inserir dados para a tabela 'contato_estudante'
        RepresentanteEmpresa::insert([
            [
                'nm_representante' => 'José Oliveira',
                'cpf_representante' => '39291149361',
                'telefone_comercial' => '1112223333',
                'telefone_celular' => '1112223333',
                'email' => 'empresa1@exemplo.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 'José Oliveira',
                'cpf_representante' => '39291149387',
                'telefone_comercial' => '4445556666',
                'telefone_celular' => '4445556666',
                'email' => 'empresa2@exemplo.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 'José Oliveira',
                'cpf_representante' => '39291149371',
                'telefone_comercial' => '7778889986',
                'telefone_celular' => '7778889999',
                'email' => 'empresa3@exemplo.com', 
                'created_at' => now()
            ],
            [
                'nm_representante' => 'José Oliveira',
                'cpf_representante' => '39291149370',
                'telefone_comercial' => '7778889986',
                'telefone_celular' => '7778889999',
                'email' => 'empresa4@exemplo.com', 
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'contato_empresa'
        ContatoEstudante::insert([
            [
                'telefone_celular' => '1112223333',
                'email' => 'estudante@empresa1.com', 
                'created_at' => now()
            ],
            [
                'telefone_celular' => '2223334444',
                'email' => 'ana.silva@example.com',
                'created_at' => now()
            ],
            [
                'telefone_celular' => '5556667777',
                'email' => 'carlos.oliveira@example.com',
                'created_at' => now()
            ]
        ]);

        // Inserir dados para a tabela 'estudantes'
        Estudante::insert([
            [
                'nome' => 'Rodrigo Torres do Nascimento',
                'data_nasc' => '1995-03-15',
                'idade' => 18,
                'cpf' => '12345678901',
                'cep' => '11714000',
                'sobre' => 'Estudante de programação, visando um futuro na área',
                'curriculo' => 'storage/uploads/estudantes/curriculos/Curriculo.pdf',
                'id_contato' => 1,
                'id_user' => 1,
                'id_sexo' => 1,
                'id_bairro' => 17,
            ],
            [
                'nome' => 'Ana Silva',
                'data_nasc' => '1998-05-20',
                'idade' => 23,
                'cpf' => '98765432109',
                'cep' => '11713000',
                'sobre' => 'Estudante de Marketing buscando oportunidades inovadoras.',
                'id_contato' => 2,
                'id_user' => 5,
                'id_sexo' => 2,
                'id_bairro' => 17,
                'created_at' => now()
            ],
            [
                'nome' => 'Carlos Oliveira',
                'data_nasc' => '1997-09-15',
                'idade' => 24,
                'cpf' => '87654321098',
                'cep' => '11713000',
                'sobre' => 'Estudante de Logística interessado em processos eficientes.',
                'id_contato' => 3,
                'id_user' => 7,
                'id_sexo' => 1,
                'id_bairro' => 17,
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'empresas'
        Empresa::insert([
            [
                'cnpj' => '12345678901234',
                'nm_fantasia' => 'Google',
                'razao_social' => 'Empresa de Tecnologia',
                'descricao' => 'Junte-se a uma das empresas mais inovadoras do mundo! No Google, estamos comprometidos em criar um impacto positivo através da tecnologia. Nossa cultura é baseada na colaboração, criatividade e diversidade. Se você procura desafios e oportunidades de crescimento, queremos conhecê-lo!', 
                'endereco' => '123 Rua da Tecnologia', 
                'cep' => '11713000', 
                'id_representante' => 1,
                'id_user' => 2,
                'created_at' => now()
            ],
            [
                'cnpj' => '98765432109876',
                'nm_fantasia' => 'Nubank',
                'razao_social' => 'Corporação Financeira', 
                'descricao' => 'Serviços financeiros inovadores', 
                'endereco' => '456 Avenida Financeira', 
                'cep' => '11713000', 
                'id_representante' => 2,
                'id_user' => 3,
                'created_at' => now()
            ],
            [
                'cnpj' => '56789012345678',
                'nm_fantasia' => 'Matera',
                'razao_social' => 'Economia e Saúde', 
                'descricao' => 'Cuidando da sua saúde com excelência', 
                'endereco' => '789 Rua da Saúde', 
                'cep' => '11713000', 
                'id_representante' => 3,
                'id_user' => 4, 
                'created_at' => now()
            ],
            [
                'cnpj' => '567890123489078',
                'nm_fantasia' => 'Serasa',
                'razao_social' => 'Finanças e dinheiro', 
                'descricao' => 'Cuidando do seu dinheiro', 
                'endereco' => '789 Rua da Saúde', 
                'cep' => '11713000', 
                'id_representante' => 3,
                'id_user' => 5, 
                'created_at' => now()
            ],
        ]);

        // Inserir dados para a tabela 'vagas'
        Vaga::insert([
            [
                'id_modalidade' => 2,
                'id_empresa' => 1, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 16,
                'id_categoria' => 1,
                'titulo' => 'Desenvolvedor Web', 
                'descricao' => 'Junte-se a nós e faça parte de uma equipe inovadora! Estamos em busca de um Desenvolvedor Web apaixonado por criar soluções incríveis. Se você é apaixonado por programação, tem habilidades em HTML, CSS, JavaScript e experiência em desenvolvimento web, esta é a oportunidade perfeita para você!',
                'salario' => 800.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_modalidade' => 2,
                'id_empresa' => 1, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 12,
                'id_categoria' => 1,
                'titulo' => 'Desenvolvedor Web Java', 
                'descricao' => 'Oportunidade para desenvolver software',
                'salario' => 500.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_modalidade' => 3,
                'id_empresa' => 1, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 3,
                'id_categoria' => 1,
                'titulo' => 'Suporte TI', 
                'descricao' => 'Precisando com urgência',
                'salario' => 600.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_modalidade' => 1,
                'id_empresa' => 3, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 4,
                'id_categoria' => 1,
                'titulo' => 'Escritório de Informática', 
                'descricao' => 'Precisando com urgência',
                'salario' => 600.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_modalidade' => 3,
                'id_empresa' => 3, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 5,
                'id_categoria' => 1,
                'titulo' => 'Programador PHP Jr', 
                'descricao' => 'Precisando com urgência',
                'salario' => 600.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_modalidade' => 1,
                'id_empresa' => 1, 
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 31,
                'id_categoria' => 1,
                'titulo' => 'Desenvolvedor Phyton', 
                'descricao' => 'Oportunidade para desenvolver aplicações web inovadoras',
                'salario' => 790.00, 
                'data_expiracao' => '2023-12-01',
                'created_at' => now()
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 1,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 8,
                'id_categoria' => 3,
                'titulo' => 'Assistente Administrativo',
                'descricao' => 'Vaga para assistente administrativo. Atividades incluem organização de documentos e atendimento ao cliente.',
                'salario' => 700.00,
                'data_expiracao' => now()->addDays(15),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 2,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 30,
                'id_categoria' => 3,
                'titulo' => 'Analista de Recursos Humanos',
                'descricao' => 'Oportunidade para analista de RH. Realizará processos seletivos e atividades relacionadas à gestão de pessoas.',
                'salario' => 300.00,
                'data_expiracao' => now()->addDays(20),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 3,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 20,
                'id_categoria' => 3,
                'titulo' => 'Auxaliar Administrativo',
                'descricao' => 'Buscamos um gestor administrativo para liderar equipes e otimizar processos internos.',
                'salario' => 600.00,
                'data_expiracao' => now()->addDays(25),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 1,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 14,
                'id_categoria' => 3,
                'titulo' => 'Auxiliar Financeiro',
                'descricao' => 'Vaga para auxiliar financeiro. Atuará nas atividades relacionadas à área financeira da empresa.',
                'salario' => 800.00,
                'data_expiracao' => now()->addDays(18),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 2,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' =>  11,
                'id_categoria' => 3,
                'titulo' => 'Auxiliador de Logística',
                'descricao' => 'Coordenará as atividades logísticas da empresa, garantindo eficiência nas operações.',
                'salario' => 550.00,
                'data_expiracao' => now()->addDays(22),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 2,
                'id_modalidade' => 3,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 9,
                'id_categoria' => 3,
                'titulo' => 'Auxiliar Administrativo',
                'descricao' => 'Especialista em compras para gerenciar o processo de aquisição de materiais e serviços.',
                'salario' => 480.00,
                'data_expiracao' => now()->addDays(30),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 1,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 6,
                'id_categoria' => 4,
                'titulo' => 'Analista de Logística',
                'descricao' => 'Oportunidade para analista de logística. Responsável pelo planejamento e otimização de processos logísticos.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(20),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 2,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 8,
                'id_categoria' => 4,
                'titulo' => 'Coordenador de Distribuição',
                'descricao' => 'Coordenará as atividades de distribuição de produtos, garantindo eficiência e qualidade.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(22),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 3,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 3,
                'id_categoria' => 4,
                'titulo' => 'Analista de Suprimentos',
                'descricao' => 'Atuará na gestão de suprimentos, realizando análise e otimização dos processos de compras.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(30),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 1,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 2,
                'id_categoria' => 4,
                'titulo' => 'Assistente de Estoque',
                'descricao' => 'Vaga para assistente de estoque. Responsável pelo controle e organização do estoque da empresa.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(18),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 2,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 1,
                'id_categoria' => 4,
                'titulo' => 'Assistente de Logística',
                'descricao' => 'Buscamos um profissional para gerenciar toda a área logística da empresa.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(25),
                'created_at' => now(),
            ],
            [
                'id_empresa' => 3,
                'id_modalidade' => 3,
                'id_status' => 1,
                'id_periodo' => 1,
                'id_bairro' => 10,
                'id_categoria' => 4,
                'titulo' => 'Analista de Importação e Exportação',
                'descricao' => 'Atuará nas atividades de importação e exportação, garantindo conformidade com as normas.',
                'salario' => rand(500, 800) . '.00',
                'data_expiracao' => now()->addDays(28),
                'created_at' => now(),
            ],
        ]);
      
        // Inserir dados para a tabela 'conversas'
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
                'id_user' => 2, 
                'texto' => 'Olá, estamos interessados na sua vaga!',
                'created_at' => now()
            ],
            [
                'id_conversa' => 1, 
                'id_user' => 7, 
                'texto' => 'Ótimo! Podemos agendar uma entrevista?',
                'created_at' => now()
            ],
            [
                'id_conversa' => 2, 
                'id_user' => 3, 
                'texto' => 'Qual é a carga horária do trabalho?',
                'created_at' => now()
            ],
            [
                'id_conversa' => 3, 
                'id_user' => 4, 
                'texto' => 'Gostaríamos de saber mais sobre a vaga de médico residente.',
                'created_at' => now()
            ],
        ]);
    }
}
