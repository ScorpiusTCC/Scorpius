<?php

namespace App\Http\Controllers;

use App\Models\Escolaridade;
use App\Models\PeriodoEscolaridade;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function create()
    {
        $escolaridade = Escolaridade::all();
        $periodo = PeriodoEscolaridade::all();
        

        return view('site/company-register');
    }

    public function store(Request $request)
    {

    }
}
