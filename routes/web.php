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


// Site 

// Manipular Login, Logout...

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::get('auth', [LoginController::class, 'auth'])->name('auth');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Manipular Chat...



// Manipular vagas

Route::get('Vagas', [VagaController::class, 'index'])->name('index.job');

Route::get('Registro-vaga', [VagaController::class, 'create'])->name('job.create');

Route::post('Add-vaga', [VagaController::class, 'store'])->name('job.store');

Route::get('Vaga/{id}', [VagaController::class, 'show'])->name('job.show');

Route::delete('Vaga-delete/{id}', [VagaController::class, 'delete'])->name('job.delete');

Route::get('filtrarNomeVaga', [VagaController::class, 'filterName'])->name('filterNameVaga');

Route::get('filtrosVagas', [VagaController::class, 'filtersVagas'])->name('filter.jobs');

Route::get('filtrarVagaCategoria/{id}', [VagaController::class, 'filterCategory'])->name('filterCategoryVaga');

// Manipular estudantes

Route::get('Registro-estudante', [EstudanteController::class, 'create'])->name('student-register');

Route::post('Add-estudante', [EstudanteController::class, 'store'])->name('submitEstudante');

Route::get('Estudante/MeuPerfil', [EstudanteController::class, 'showProfile'])->name('student.profile')->middleware('auth', 'estudante');

Route::get('Estudante/Perfil/{id}', [EstudanteController::class, 'show'])->name('show');

Route::post('Estudante/EditarPerfil', [EstudanteController::class, 'editProfile'])->name('estudante.profile-edit')->middleware('auth', 'estudante');

Route::get('Estudante/EditarDados', [EstudanteController::class, 'editData'])->name('estudante.data-edit')->middleware('auth', 'estudante');

Route::post('Estudante/AtualizarDados', [EstudanteController::class, 'storeData'])->name('estudante.data-store')->middleware('auth', 'estudante');

Route::get('AddCurso', [EstudanteController::class, 'addCurso'])->name('curso.store')->middleware('auth', 'estudante');

Route::delete('deleteCurso/{id}', [EstudanteController::class, 'destroyCursos'])->name('curso.delete')->middleware('auth', 'estudante');

Route::get('AddExp', [EstudanteController::class, 'addExp'])->name('exp.store')->middleware('auth', 'estudante');

Route::delete('deleteExp/{id}', [EstudanteController::class, 'destroyExp'])->name('exp.delete')->middleware('auth', 'estudante');

// Manipular Empresas 

Route::get('Registro-empresa', [EmpresaController::class, 'create'])->name('empresa.create');

Route::post('Add-empresa', [EmpresaController::class, 'store'])->name('empresa.store');

Route::post('Empresa/EditarPerfil', [EmpresaController::class, 'editProfile'])->name('empresa.profile-edit')->middleware('auth', 'empresa');

Route::get('Empresa/MeuPerfil', [EmpresaController::class, 'showProfile'])->name('company.profile')->middleware('auth', 'empresa');

Route::get('Empresa/EditarDados', [EmpresaController::class, 'editData'])->name('empresa.data-edit')->middleware('auth', 'empresa');

Route::post('Empresa/AtualizarDados', [EmpresaController::class, 'storeData'])->name('empresa.data-store')->middleware('auth', 'empresa');

Route::get('Empresa/Perfil/{id}', [EmpresaController::class, 'show'])->name('company.show');

// Demais rotas 

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('Sobre-Nós', [SiteController::class, 'about_us'])->name('about-us');

Route::get('Cadastrar-se', [SiteController::class, 'register'])->name('register');

Route::get('/company-register', function () {
    return view('site/company-register');
})->name('company-register');

Route::get('/jobs-student', function () {
    return view('site/jobs-student');
})->name('jobs-student');

Route::get('/jobs-company', function () {
    return view('site/jobs-company');
})->name('jobs-company');

Route::get('/company-jobs-users', function () {
    return view('site/company-jobs-users');
})->name('company-jobs-users');

Route::get('/jobs-profile', function () {
    return view('site/jobs-profile');
})->name('jobs-profile');

Route::get('/logged-jobs-profile', function () {
    return view('site/logged-jobs-profile');
})->name('logged-jobs-profile');

Route::get('/edit-jobs', function () {
    return view('site/edit-jobs');
})->name('edit-jobs');


// Admin

Route::get('admin-login/', function () {
    return view('admin/home-admin');
})->name('admin.index');

Route::get('admin/students', function () {
    return view('admin/students');
})->name('admin.students');

Route::get('admin/jobs', function () {
    return view('admin/jobs');
})->name('admin.jobs');

Route::get('admin/companys', function () {
    return view('admin/companys');
})->name('admin.companys');

