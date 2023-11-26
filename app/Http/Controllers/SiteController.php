<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Periodo;
use App\Models\Sexo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('site/index', compact('categorias'));
    }
}
