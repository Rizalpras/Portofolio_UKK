<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;
use App\Models\Portofolio;
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


Route::get('project', function () {
    return view('project');
});

Route::get('/auth-login', function () {
    return view('login');
});


Route::get('/tambah-data', [PortofolioController::class, 'createPortofolio'])->name('tambah');
Route::get('/project', [PortofolioController::class, 'project'])->name('project');
Route::post('/auth-login-user', [LoginController::class, 'login'])->name('auth.login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/index', [PortofolioController::class, 'index'])->name('index');
Route::post('/project', [PortofolioController::class, 'simpan'])->name('project.create');
Route::delete('/project/{id}', [PortofolioController::class, 'hapus'])->name('project.hapus');
Route::put('/project/edit/{id}', [PortofolioController::class, 'update'])->name('project.update');
Route::get('/kontak', [PortofolioController::class, 'kontak'])->name('project.kontak');