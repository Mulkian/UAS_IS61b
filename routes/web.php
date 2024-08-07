<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\JenisMobilController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemesanharianController;
use App\Http\Controllers\PemesanPaketController;
use App\Http\Controllers\PengembalianMobilController;
use App\Http\Controllers\TransaksiController;

Auth::routes();

// Rute awal ke halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Pemesan
Route::get('/pemesan', [PemesanController::class, 'index']);
Route::post('/pemesan/store/', [PemesanController::class, 'store']);
Route::get('/pemesan/form/', [PemesanController::class, 'create']);
Route::get('/pemesan/edit/{id}', [PemesanController::class, 'edit']);
Route::put('/pemesan/{id}', [PemesanController::class, 'update']);
Route::delete('/pemesan/{id}', [PemesanController::class, 'destroy']);

// Rute untuk Petugas
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);

// Rute untuk Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/form/', [PemesananController::class, 'create']);
Route::post('/pemesanan/store/', [PemesananController::class, 'store']);
Route::get('/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);

Route::get('/jenismobil', [JenisMobilController::class, 'index']);
Route::get('/jenismobil/form/', [JenisMobilController::class, 'create']);
Route::post('/jenismobil/store/', [JenisMobilController::class, 'store']);
Route::get('/jenismobil/edit/{id}', [JenisMobilController::class, 'edit']);
Route::put('/jenismobil/{id}', [JenisMobilController::class, 'update']);
Route::delete('/jenismobil/{id}', [JenisMobilController::class, 'destroy']);

// Rute untuk Pemesan Harian


// Rute untuk Jenis Mobil
Route::resource('jenismobil', JenisMobilController::class);

Route::get('/pemesananpaket', [PemesanPaketController::class, 'index']);
Route::get('/pemesananpaket/form/', [PemesanPaketController::class, 'create']);
Route::post('/pemesananpaket/store/', [PemesanPaketController::class, 'store']);
Route::get('/pemesananpaket/edit/{id}', [PemesanPaketController::class, 'edit']);
Route::put('/pemesananpaket/{id}', [PemesanPaketController::class, 'update']);
Route::delete('/pemesananpaket/{id}', [PemesanPaketController::class, 'destroy']);

Route::get('/pengembalianmobil', [PengembalianMobilController::class, 'index']);
Route::get('/pengembalianmobil/form/', [PengembalianMobilController::class, 'create']);
Route::post('/pengembalianmobil/store/', [PengembalianMobilController::class, 'store']);
Route::get('/pengembalianmobil/edit/{id}', [PengembalianMobilController::class, 'edit']);
Route::put('/pengembalianmobil/{id}', [PengembalianMobilController::class, 'update']);
Route::delete('/pengembalianmobil/{id}', [PengembalianMobilController::class, 'destroy']);

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/form/', [TransaksiController::class, 'create']);
Route::post('/transaksi/store/', [TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);
