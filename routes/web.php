<?php

use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VagaController;
use App\Models\Estudante;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Manipular Login, Logout...

Route::get('/login', function () {
    return view('site/login');
})->name('login');

Route::get('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Manipular vagas

Route::get('/vagas', [VagaController::class, 'index'])->name('vagas');

Route::get('/filterNameVaga', [VagaController::class, 'filterName'])->name('filterNameVaga');

Route::get('/filterCategoryVaga/{id}', [VagaController::class, 'filterCategory'])->name('filterCategoryVaga');


// Manipular estudantes

Route::get('/student-register', [EstudanteController::class, 'create'])->name('student-register');

// Demais rotas 

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/about-us', function () {
    return view('site/about-us');
})->name('about-us');

Route::get('/register', function () {
    return view('site/register');
})->name('register');


Route::get('/company-register', function () {
    return view('site/company-register');
})->name('company-register');

Route::get('/profile-company', function () {
    return view('site/company-profile');
})->name('profile-company');

Route::get('/profile', function () {
    return view('site/profile');
})->name('profile');

Route::get('/registro-vaga', function () {
    return view('site/job-register');
})->name('job-register');

