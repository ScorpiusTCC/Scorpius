<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use App\Models\Candidatura;
use App\Models\Categoria;
use App\Models\Modalidade;
use App\Models\Periodo;
use App\Models\Vaga;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public readonly Vaga $vaga;
    
    public function __construct()
    {
        $this->vaga = new Vaga();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && auth()->user()->estudante) {
            // Usuário logado, filtra as vagas que o estudante ainda não se candidatou
            $vagas = Vaga::orderBy('created_at', 'desc')
                ->where('id_status', 1)
                ->whereNotIn('id', function ($query) {
                    $query->select('id_vaga')
                        ->from('candidaturas')
                        ->where('id_estudante', auth()->user()->estudante->id);
                })
                ->paginate(8);
        } else {
            // Nenhum usuário logado, mostra todas as vagas
            $vagas = Vaga::orderBy('created_at', 'desc')
                    ->where('id_status', 1)
                    ->paginate(8);
        }

        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();

        return view('site/jobs', compact('vagas', 'periodos', 'categorias', 'modalidades'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modalidades = Modalidade::all();
        $categorias = Categoria::all();
        $periodos = Periodo::all();

        return view('site/job-register', compact('modalidades', 'categorias', 'periodos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $data['data_exp'] = Carbon::now()->addMonths(2);

        $company = auth()->user()->empresa;

        // Pegar o id do bairro 
        $bairro = Bairro::where('nome', $data['bairro'])->first();

        $company->vagas()->create([
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'data_expiracao' => $data['data_exp'],
            'salario' => $data['salario'],
            'id_modalidade' => $data['modalidade'],
            'id_categoria' => $data['categoria'],
            'id_periodo' => $data['periodo'],
            'id_bairro' => $bairro->id,
            'id_status' => 1,
        ]);

        return redirect()->route('index');
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vaga = Vaga::find($id);
    
        // Verificar se o usuário está conectado a esta vaga
        $candidatado = false;
        $idCandidatura = null;
    
        if (auth()->check() && auth()->user()->estudante) {
            $estudanteId = auth()->user()->estudante->id;
    
            $candidatura = Candidatura::where('id_estudante', $estudanteId)
                ->where('id_vaga', $id)
                ->first();
    
            if ($candidatura !== null) {
                $candidatado = true;
                $idCandidatura = $candidatura->id;
            }
        }
    
        $ajuste = '../';
    
        return view('site/jobs-profile', compact('vaga', 'ajuste', 'candidatado', 'idCandidatura'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vaga = Vaga::find($id);
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();

        $ajuste = '../../';

        return view('site/edit-jobs', compact('vaga', 'periodos', 'categorias', 'modalidades', 'ajuste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $vaga = Vaga::find($id);

        $data['data_exp'] = Carbon::now()->addMonths(2);

        $vaga->update([
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'data_expiracao' => $data['data_exp'],
            'salario' => $data['salario'],
            'id_modalidade' => $data['modalidade'],
            'id_categoria' => $data['categoria'],
            'id_periodo' => $data['periodo'],
            'id_status' => 1,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vaga = Vaga::findOrFail($id);

        // Excluir todas as candidaturas associadas à vaga
        $vaga->candidaturas->each(function ($candidatura) {
            $candidatura->delete();
        }); 
        
        $vaga->delete();
        
        return redirect()->route('company.jobs');
    }

    public function editStatus($id)
    {
        $vaga = Vaga::findOrFail($id);

        $vaga->update([
            'id_status' => '2'
        ]); 
        
        return redirect()->route('company.jobs');
    }
 
    public function profileJob($id)
    {
        $vaga = Vaga::find($id);

        $enderecoData = $this->enderecoUser($vaga->empresa->cep);
        
        $ajuste = '../../';

        return view('site/logged-jobs-profile', compact('vaga', 'enderecoData', 'ajuste'));
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

        $bairro = request('bairro');
        if ($bairro !== null) {
            $vagas->where('cd_bairro', '<=', $bairro);
        }

        // Execute a consulta
        $vagas = $vagas->paginate(8);

        // Retorne a view com os resultados
        return view('site/jobs', compact('vagas', 'periodos', 'categorias', 'modalidades'));
    }

    public function filterCategory($id)
    {
        $searchCategory = $id;
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();
        $ajuste_vaga = '../';
        $ajuste = '../';

        $vagas = Vaga::where('vagas.id_categoria', $searchCategory)
                    ->paginate(8);

        return view('site/jobs', compact('vagas', 'ajuste_vaga', 'ajuste', 'periodos', 'categorias', 'modalidades'));
    }

    public function filterName(Request $request)
    {
        $searchName = $request->searchName;
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();
        $vagas = Vaga::where('vagas.titulo', 'like', '%' . $searchName . '%')
                    ->paginate(8);
    
        return view('site/jobs', compact('vagas', 'periodos', 'categorias', 'modalidades'));
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
