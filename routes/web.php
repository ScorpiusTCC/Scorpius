<?php

use App\Http\Controllers\EmpresaController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Manipular vagas

Route::get('/Vagas', [VagaController::class, 'index'])->name('index.job');

Route::get('/Registro-vaga', [VagaController::class, 'create'])->name('job.create');

Route::post('/Add-vaga', [VagaController::class, 'store'])->name('job.store');

Route::get('/Vaga/{id}', [VagaController::class, 'show'])->name('job.show');

Route::delete('/Vaga-delete/{id}', [VagaController::class, 'delete'])->name('job.delete');

Route::get('/filterNameVaga', [VagaController::class, 'filterName'])->name('filterNameVaga');

Route::get('/filterCategoryVaga/{id}', [VagaController::class, 'filterCategory'])->name('filterCategoryVaga');

// Manipular estudantes

Route::get('/student-register', [EstudanteController::class, 'create'])->name('student-register');

Route::post('/submitEstudante', [EstudanteController::class, 'store'])->name('submitEstudante');

Route::get('Estudante/MeuPerfil', [EstudanteController::class, 'showProfile'])->name('student.profile');

Route::get('Perfil/{id}', [EstudanteController::class, 'show'])->name('show');

Route::post('Estudante/Edit-Profile', [EstudanteController::class, 'editProfile'])->name('estudante.profile-edit');

Route::get('Estudante/Editar-Dados', [EstudanteController::class, 'editData'])->name('estudante.data-edit');

Route::post('Estudante/Submit-Data', [EstudanteController::class, 'storeData'])->name('estudante.data-store');

Route::get('AddCurso', [EstudanteController::class, 'addCurso'])->name('curso.store');

Route::delete('deleteCurso/{id}', [EstudanteController::class, 'destroyCursos'])->name('curso.delete');

Route::get('AddExp', [EstudanteController::class, 'addExp'])->name('exp.store');

Route::delete('deleteExp/{id}', [EstudanteController::class, 'destroyExp'])->name('exp.delete');

// Manipular Empresas 

Route::get('student-company', [EmpresaController::class, 'create'])->name('empresa.create');

Route::post('submitEmpresa', [EmpresaController::class, 'store'])->name('empresa.store');

Route::post('Empresa/Edit-Profile', [EmpresaController::class, 'editProfile'])->name('empresa.profile-edit');

Route::get('Empresa/MeuPerfil', [EmpresaController::class, 'showProfile'])->name('company.profile');

Route::get('Empresa/Editar-Dados', [EmpresaController::class, 'editData'])->name('empresa.data-edit');

Route::post('Empresa/Submit-Data', [EmpresaController::class, 'storeData'])->name('empresa.data-store');

Route::get('Perfil/{id}', [EmpresaController::class, 'show'])->name('company.show');

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

Route::get('/logged-profile-company', function () {
    return view('site/logged-company-profile');
})->name('logged-profile-company');

Route::get('/profile', function () {
    return view('site/student-profile');
})->name('profile');

Route::get('/logged-profile', function () {
    return view('site/logged-student-profile');
})->name('logged-profile');


