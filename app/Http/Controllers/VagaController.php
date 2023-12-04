<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Modalidade;
use App\Models\Periodo;
use App\Models\Vaga;
use Carbon\Carbon;
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
        $vagas = Vaga::orderBy('created_at', 'desc')->paginate(8);
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

        // dd($data, $company->id);

        $company->vagas()->create([
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'data_expiracao' => $data['data_exp'],
            'salario' => $data['salario'],
            'id_modalidade' => $data['modalidade'],
            'id_categoria' => $data['categoria'],
            'id_periodo' => $data['periodo'],
            'id_status' => 1,
        ]);

        return redirect()->route('index');
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
        return view('site/jobs', compact('vagas', 'periodos', 'categorias', 'modalidades'));
    }

    public function filterCategory($id)
    {
        $searchCategory = $id;
        $modalidades = Modalidade::all();
        $periodos = Periodo::all();
        $categorias = Categoria::all();
        $ajuste_vaga = true;
        $ajuste = true;

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
}
