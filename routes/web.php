<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PetugasController;

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
