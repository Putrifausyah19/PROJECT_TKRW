<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $pesanan = pesanan::with("produk")->paginate(5);
        return view('admin.pesanan.index', compact("pesanan"));
    }

    public function create(){
        $produk = Produk::all();

        return view('admin.pesanan.create', compact("produk"));
    }
    public function store(Request $request){
        pesanan::create($request->all());

        return redirect()->route('pesanan-index');
        //return redirect()->route('');
    }
    public function destroy($id){
        $pesanans = pesanan::where("id", $id)->first();
        $pesanans->delete();

        return redirect()->route("pesanan-index");
    }
    public function edit($id){
        $pesanans = pesanan::where("id", $id)->first();
        $produk = Produk::all();
        return view("admin.pesanan.edit", compact("pesanans","produk"));
    }

    public function update(Request $request, $id){
        $pesanans = pesanan::where("id", $id)->first();
        $pesanans->update($request->all());

        return redirect()->route("pesanan-index");
    }
}
