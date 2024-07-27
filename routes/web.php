<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\JenisMobilController;
use App\Http\Controllers\PemesananController;


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


// Rute autentikasi
Auth::routes();

// Mengarahkan rute awal ke halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pemesan', [PemesanController::class, 'index']);
Route::post('/pemesan/store/', [PemesanController::class, 'store']);
Route::get('/pemesan/form/', [PemesanController::class, 'create']);
Route::get('/pemesan/edit/{id}', [PemesanController::class, 'edit']);
Route::put('/pemesan/{id}', [PemesanController::class, 'update']);
Route::delete('/pemesan/{id}', [PemesanController::class, 'destroy']);



Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);

Route::get('/jenismobil', [JenisMobilController::class, 'index']);
Route::get('/jenismobil/form/', [JenisMobilController::class, 'create']);
Route::post('/jenismobil/store/', [JenisMobilController::class, 'store']);
Route::get('/jenismobil/edit/{id}', [JenisMobilController::class, 'edit']);
Route::put('/jenismobil/{id}', [JenisMobilController::class, 'update']);
Route::delete('/jenismobil/{id}', [JenisMobilController::class, 'destroy']);

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/form/', [PemesananlController::class, 'create']);
Route::post('/pemesanan/store/', [PemesananlController::class, 'store']);
Route::get('/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);

