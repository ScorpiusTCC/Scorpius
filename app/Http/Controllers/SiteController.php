<?php

namespace App\Http\Controllers;

use App\Models\CategoriaVaga;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categorias = CategoriaVaga::all();

        return view('site/index', compact('categorias'));
    }
}
