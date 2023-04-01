<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
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
    return view('backend.master');
});
//ini tabel produk
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk-create');
Route::post('produk/toko',[ProdukController::class,'store'])->name(('produk-toko-store'));
Route::delete('produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk-delete');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk-edit');
Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk-update');
Route::get('/produk/index', [ProdukController::class, 'index'])->name('produk-index');

//ini tabel transaksi
Route::get('/transaksi/index', [TransaksiController::class, 'index'])->name('transaksi-index');

//ini tabel pesanan
Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan-create');
Route::post('pesanan/toko',[PesananController::class,'store'])->name(('pesanan-toko-store'));
Route::delete('pesanan/delete/{id}', [PesananController::class, 'destroy'])->name('pesanan-delete');
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan-edit');
Route::put('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan-update');
Route::get('/pesanan/index', [PesananController::class, 'index'])->name('pesanan-index');

//ini tabel laporan
Route::get('/laporan/index', [LaporanController::class, 'index'])->name('laporan-index');

