<?php

namespace App\Http\Controllers;

use App\Models\CategoriaVaga;
use App\Models\ModalidadeVaga;
use App\Models\Periodo;
use App\Models\Sexo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categorias = CategoriaVaga::all();

        return view('site/index', compact('categorias'));
    }
}
