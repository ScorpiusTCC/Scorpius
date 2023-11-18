<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
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
        $vagas = $this->DadosVaga()
                    ->paginate(10);

        return view('site/jobs', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        $vagas = $this->DadosVaga()
                    ->where('vagas.id_categoria_vaga', $searchCategory)
                    ->paginate(10);

        return view('site/jobs', compact('vagas'));
    }

    public function filterName(Request $request)
    {
        $searchName = $request->searchName;

        $vagas = $this->DadosVaga()
                    ->where('vagas.titulo', 'like', '%' . $searchName . '%')
                    ->paginate(10);

        // echo '<pre>';
        // var_dump($vagas);
        // echo '<pre>';

        return view('site/jobs', compact('vagas'));
    }

    private function DadosVaga()
    {
        $dadosVaga = Vaga::select(
            'vagas.*',
            'empresas.nm_fantasia as empresa',
            'status.nome as status',
            'modalidades_vaga.tipo as modalidade', 
            'users.nm_img'
        )
        ->join('status', 'vagas.id_status', 'status.id')
        ->join('modalidades_vaga', 'vagas.id_modalidade', 'modalidades_vaga.id')
        ->join('empresas', 'vagas.id_empresa', 'empresas.id')
        ->join('users', 'empresas.id_user', 'users.id');
        
        return $dadosVaga;
    }
}
