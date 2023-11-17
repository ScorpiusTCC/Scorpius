<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Escola;
use App\Models\Periodo;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function create()
    {
        $escolas = Escola::all();
        $cursos = Curso::all();
        $periodos = Periodo::all();
        
        return view('site/student-register', compact('escolas', 'periodos', 'cursos'));
    }

    public function store(Request $request)
    {
        
    }
}
