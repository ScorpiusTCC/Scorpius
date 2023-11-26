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
        $vagas = Vaga::orderBy('created_at', 'desc')->paginate(12);

        $ajuste_vaga = false;

        return view('site/jobs', compact('vagas', 'ajuste_vaga'));
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

    public function filterCategory($id)
    {
        $searchCategory = $id;

        $vagas = Vaga::where('vagas.id_categoria', $searchCategory)
                    ->paginate(10);

        // $vagas['img'] = '../' . $vagas['nm_img'];

        $ajuste_vaga = true;
        $ajuste = true;

        return view('site/jobs', compact('vagas', 'ajuste_vaga', 'ajuste'));
    }

    public function filterName(Request $request)
    {
        $searchName = $request->searchName;

        $vagas = Vaga::where('vagas.titulo', 'like', '%' . $searchName . '%')
                    ->paginate(12);

        // echo '<pre>';
        // var_dump($vagas);
        // echo '<pre>';
        $ajuste_vaga = false;
    
        return view('site/jobs', compact('vagas', 'ajuste_vaga'));
    }

    private function DadosVaga()
    {
        $dadosVaga = Vaga::select(
            'vagas.*',
            'empresas.nm_fantasia as empresa',
            'status.nome as status',
            'modalidades.nome as modalidade', 
            'users.nm_img as nm_img'
        )
        ->join('status', 'vagas.id_status', 'status.id')
        ->join('modalidades_vaga', 'vagas.id_modalidade', 'modalidades_vaga.id')
        ->join('empresas', 'vagas.id_empresa', 'empresas.id')
        ->join('users', 'empresas.id_user', 'users.id');

        return $dadosVaga;
    }
}
