<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesanController;

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

