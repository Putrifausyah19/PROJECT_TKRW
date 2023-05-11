<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use App\Models\pesanan;
use App\Models\Produk;
use App\Models\transaksi;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $pesanan = pesanan::with('transaksi','kurir')->paginate(5);
        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function create(){
        $transaksi = transaksi::all();
        $kurir = Kurir::all();

        return view('admin.pesanan.create', compact('transaksi', 'kurir'));
    }
    public function store(Request $request){
        pesanan::create($request->all());

        return redirect()->route('pesanan-index');
        //return redirect()->route('');
    }
    public function destroy($id){
        $pesanan = pesanan::where("id", $id)->first();
        $pesanan->delete();

        return redirect()->route('pesanan-index');
    }
    public function edit($id){
        $pesanan = pesanan::where("id", $id)->first();
        $transaksi = transaksi::all();
        $kurir = Kurir::all();
        return view('admin.pesanan.edit', compact('pesanan','transaksi','kurir'));
    }

    public function update(Request $request, $id){
        $pesanan = pesanan::where("id", $id)->first();
        $pesanan->update($request->all());

        return redirect()->route('pesanan-index');
    }
}
