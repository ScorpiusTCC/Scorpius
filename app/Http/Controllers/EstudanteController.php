<?php

namespace App\Http\Controllers;

use App\Models\Escolaridade;
use App\Models\PeriodoEscolaridade;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function create()
    {
        $escolaridades = Escolaridade::all();
        $periodos = PeriodoEscolaridade::all();
        
        return view('site/student-register', compact('escolaridades', 'periodos'));
    }

    public function store(Request $request)
    {
        
    }
}
