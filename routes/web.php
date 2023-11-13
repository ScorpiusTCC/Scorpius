<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('site/index');
})->name('index');

Route::get('/about-us', function () {
    return view('site/about-us');
})->name('about-us');

Route::get('/login', function () {
    return view('site/login');
})->name('login');


Route::get('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('site/register');
})->name('register');

Route::get('/student-register', function () {
    return view('site/student-register');
})->name('student-register');

Route::get('/company-register', function () {
    return view('site/company-register');
})->name('company-register');

Route::get('/profile-company', function () {
    return view('site/company-profile');
})->name('profile-company');

Route::get('/profile', function () {
    return view('site/profile');
})->name('profile');

Route::get('/vagas', function () {
    return view('site/jobs');
})->name('vagas');