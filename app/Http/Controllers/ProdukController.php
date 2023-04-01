<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all(); 

        return view('admin.produk.index', compact("produks"));

    }

    public function create(){
        return view('admin.produk.create');
    }
    public function store(Request $request){
        Produk::create($request->all());

        return redirect()->route('produk-index');
        //return redirect()->route('');
    }

    public function destroy($id){
        $produks = Produk::where("id", $id)->first();
        $produks->delete();

        return redirect()->route("produk-index");
    }

    public function edit($id){
        $produks = Produk::where("id", $id)->first();
        return view("admin.produk.edit", compact("produks"));
    }

    public function update(Request $request, $id){
        $produks = Produk::where("id", $id)->first();
        $produks->update($request->all());

        return redirect()->route("produk-index");
    }


}
