<?php

use App\Http\Controllers\PegawaiController;
use App\Models\tb_pegawai;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/lihat', function () {
    return view('lihat');
});

Route::get('/tambah', [PegawaiController::class, 'create']);

Route::post('/tambah/simpan', [PegawaiController::class, 'store']);

Route::get('/insert', function () {
    return view('pegawai.insert');
});
