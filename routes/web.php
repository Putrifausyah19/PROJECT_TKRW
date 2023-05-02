<?php

use App\Http\Controllers\KurirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Models\transaksi;
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


//ini tabel pesanan
Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan-create');
Route::post('pesanan/toko',[PesananController::class,'store'])->name(('pesanan-toko-store'));
Route::delete('pesanan/delete/{id}', [PesananController::class, 'destroy'])->name('pesanan-delete');
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan-edit');
Route::put('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan-update');
Route::get('/pesanan/index', [PesananController::class, 'index'])->name('pesanan-index');

//ini tabel laporan
Route::get('/laporan/index', [LaporanController::class, 'index'])->name('laporan-index');

//ini tabel pelanggan
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan-create');
Route::post('pelanggan/toko',[PelangganController::class,'store'])->name(('pelanggan-toko-store'));
Route::delete('pelanggan/delete/{id}', [PelangganController::class, 'destroy'])->name('pelanggan-delete');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan-edit');
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan-update');
Route::get('/pelanggan/index', [PelangganController::class, 'index'])->name('pelanggan-index');

//ini tabel kurir
Route::get('/kurir/create', [KurirController::class, 'create'])->name('kurir-create');
Route::post('kurir/toko',[KurirController::class,'store'])->name(('kurir-toko-store'));
Route::delete('kurir/delete/{id}', [KurirController::class, 'destroy'])->name('kurir-delete');
Route::get('/kurir/edit/{id}', [KurirController::class, 'edit'])->name('kurir-edit');
Route::put('/kurir/update/{id}', [KurirController::class, 'update'])->name('kurir-update');
Route::get('/kurir/index', [KurirController::class, 'index'])->name('kurir-index');

//ini tabel transaksi
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi-create');
Route::post('transaksi/toko',[TransaksiController::class,'store'])->name(('transaksi-toko-store'));
Route::get('/transaksi/index', [TransaksiController::class, 'index'])->name('transaksi-index');
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi-edit');
Route::put('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('transaksi-update');
Route::delete('transaksi/delete/{id}', [TransaksiController::class, 'destroy'])->name('transaksi-delete');


