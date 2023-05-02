<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    public function create(){
        $produk = Produk::all();

        return view('admin.transaksi.create', compact('produk'));
    }

    public function store(Request $request){
        transaksi::create($request->all());

       return redirect()->route('transaksi-index');
        //return redirect()->route('');
    }

    public function index(){
        $transaksi = transaksi::with("produk")->paginate(5);
        return view('admin.transaksi.index', compact("transaksi"));
    }

    public function destroy($id){
        $transaksi = transaksi::where("id", $id)->first();
        $transaksi->delete();

        return redirect()->route("transaksi-index");
    }

    public function edit($id){
        $transaksi = transaksi::where("id", $id)->first();
        $produk = produk::all();

        return view("admin.transaksi.edit", compact("transaksi","produk"));
    }

    public function update(Request $request, $id){
        $transaksi = transaksi::where("id", $id)->first();
        $transaksi->update($request->all());

        return redirect()->route("transaksi-index");
    }
}
