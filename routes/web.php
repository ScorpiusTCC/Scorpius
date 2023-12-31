<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
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

Route::get('registro-vaga', [VagaController::class, 'create'])->name('job.create');

Route::post('Add-vaga', [VagaController::class, 'store'])->name('job.store');

Route::get('Vaga/{id}', [VagaController::class, 'show'])->name('job.show');

Route::get('Vaga/Editar/{id}', [VagaController::class, 'edit'])->name('job.edit');

Route::post('Vaga/Atualizar/{id}', [VagaController::class, 'update'])->name('job.update');

Route::post('Vaga-editStatus/{id}/{action}', [VagaController::class, 'editStatus'])->name('job.status');

Route::get('Integra/Sua-vaga/{id}', [VagaController::class, 'profileJob'])->name('profile.job');

Route::get('filtrarNomeVaga', [VagaController::class, 'filterName'])->name('filterNameVaga');

Route::get('filtrosVagas', [VagaController::class, 'filtersVagas'])->name('filter.jobs');

Route::get('filtrarVagaCategoria/{id}', [VagaController::class, 'filterCategory'])->name('filterCategoryVaga');

// Manipular estudantes

Route::get('Registro-estudante', [EstudanteController::class, 'create'])->name('student-register');

Route::post('Add-estudante', [EstudanteController::class, 'store'])->name('submitEstudante');

Route::get('Estudante/MeuPerfil', [EstudanteController::class, 'showProfile'])->name('student.profile')->middleware('auth', 'estudante');

Route::get('Estudante/Perfil/{id}', [EstudanteController::class, 'show'])->name('student.show');

Route::get('Estudante/Canditar/{id}', [EstudanteController::class, 'jobCandidatar'])->name('candidatura.student');

Route::get('Estudante/Minhas-Candidaturas', [EstudanteController::class, 'showCandidaturas'])->name('candidaturas.show');

Route::match(['get', 'delete'], 'Estudante/Candidatura/Delete/{id}', [EstudanteController::class, 'deleteCandidatura'])->name('candidatura.delete');

Route::post('Estudante/EditarPerfil', [EstudanteController::class, 'editProfile'])->name('estudante.profile-edit')->middleware('auth', 'estudante');

Route::get('Estudante/EditarDados', [EstudanteController::class, 'editData'])->name('estudante.data-edit')->middleware('auth', 'estudante');

Route::post('Estudante/AtualizarDados', [EstudanteController::class, 'storeData'])->name('estudante.data-store')->middleware('auth', 'estudante');

Route::get('AddCurso', [EstudanteController::class, 'addCurso'])->name('curso.store')->middleware('auth', 'estudante');

Route::delete('deleteCurso/{id}', [EstudanteController::class, 'destroyCursos'])->name('curso.delete')->middleware('auth', 'estudante');

Route::get('AddExp', [EstudanteController::class, 'addExp'])->name('exp.store')->middleware('auth', 'estudante');

// Route::put('EditExp/{id}', [EstudanteController::class, 'editExp'])->name('edit.exp')->middleware('auth', 'estudante');

Route::delete('deleteExp/{id}', [EstudanteController::class, 'destroyExp'])->name('exp.delete')->middleware('auth', 'estudante');

// Manipular Empresas 

Route::get('Registro-empresa', [EmpresaController::class, 'create'])->name('empresa.create');

Route::post('Add-empresa', [EmpresaController::class, 'store'])->name('empresa.store');

Route::post('Empresa/EditarPerfil', [EmpresaController::class, 'editProfile'])->name('empresa.profile-edit')->middleware('auth', 'empresa');

Route::get('Empresa/MeuPerfil', [EmpresaController::class, 'showProfile'])->name('company.profile')->middleware('auth', 'empresa');

Route::get('Empresa/EditarDados', [EmpresaController::class, 'editData'])->name('empresa.data-edit')->middleware('auth', 'empresa');

Route::post('Empresa/AtualizarDados', [EmpresaController::class, 'storeData'])->name('empresa.data-store')->middleware('auth', 'empresa');

Route::get('Empresa/Perfil/{id}', [EmpresaController::class, 'show'])->name('company.show');

Route::get('Empresa/Minhas-vagas', [EmpresaController::class, 'jobsCompany'])->name('company.jobs');

Route::get('Empresa/Minhas-vagas/Ativas', [EmpresaController::class, 'jobsCompanyActive'])->name('company.jobs.active');

Route::get('Empresa/Minhas-vagas/Inativas', [EmpresaController::class, 'jobsCompanyInactive'])->name('company.jobs.inactive');

Route::get('Empresa/Vaga/{id}/Candidatos', [EmpresaController::class, 'showCandidatos'])->name('show.candidatos');

Route::get('Empresa/Vaga/{id_vaga}/{id_bairro}/Candidatos', [EmpresaController::class, 'showCandidatosBairro'])->name('show.candidatos.bairro');

Route::get('filtrosVagasEmpresa', [EmpresaController::class, 'filtersVagas'])->name('filter.jobs-company');

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


Route::get('/company-jobs-users', function () {
    return view('site/company-jobs-users');
})->name('company-jobs-users');

Route::get('/jobs-profile', function () {
    return view('site/jobs-profile');
})->name('jobs-profile');

Route::get('/edit-jobs', function () {
    return view('site/edit-jobs');
})->name('edit-jobs');


// Admin

Route::get('admin/home', [AdminController::class, 'index'])->name('admin.index');

// Estudantes

Route::get('Admin/Estudantes', [AdminController::class, 'index_students'])->name('admin.students');

Route::get('Admin/Estudante/{id}/EditarDados', [AdminController::class, 'editDataStudent'])->name('admin.student.data-edit');

Route::post('Admin/Estudante/Atualizardados', [AdminController::class, 'storeDataStudent'])->name('admin.student.data-store');

Route::delete('Admin/Estudante/{id}/Delete', [AdminController::class, 'destroyStudent'])->name('admin.student.delete');

// Empresa

Route::get('Admin/Empresas', [AdminController::class, 'index_companys'])->name('admin.companys');

Route::get('Admin/Empresa/{id}/EditarDados', [AdminController::class, 'editDataCompany'])->name('admin.empresa.data-edit');

Route::post('Admin/Empresa/AtualizarDados', [AdminController::class, 'storeDataCompany'])->name('admin.empresa.data-store');

Route::delete('Admin/Empresa/{id}/Delete', [AdminController::class, 'destroyCompany'])->name('admin.company.delete');

// Vagas

Route::get('Admin/Vagas', [AdminController::class, 'index_jobs'])->name('admin.jobs');

Route::get('Admin/Vaga/{id}/EditarDados', [AdminController::class, 'editDataJob'])->name('admin.job.data-edit');

Route::post('Admin/Vaga/AtualizarDados', [AdminController::class, 'storeDataJob'])->name('admin.job.data-store');

Route::delete('Admin/Vaga/{id}/Delete', [AdminController::class, 'destroyJob'])->name('admin.job.delete');

// Manipular chat 

Route::get('/chat', [ChatController::class, 'index'])->name('chat');

Route::get('/obter-dados-conversas', [ChatController::class, 'obterDadosConversas'])->name('obter-dados');

Route::get('/carregar-mensagens', [ChatController::class, 'carregarMensagens']);

