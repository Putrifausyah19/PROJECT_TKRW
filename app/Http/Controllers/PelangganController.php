<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all(); 

        return view('admin.pelanggan.index', compact("pelanggan"));

    }
    public function create(){
        return view('admin.pelanggan.create');
    }

    public function store(Request $request){
        Pelanggan::create($request->all());

        return redirect()->route('pelanggan-index');
        //return redirect()->route('');
    }

    public function destroy($id){
        $pelanggan = Pelanggan::where("id", $id)->first();
        $pelanggan->delete();

        return redirect()->route("pelanggan-index");
    }

    public function edit($id){
        $pelanggan = Pelanggan::where("id", $id)->first();
        return view("admin.pelanggan.edit", compact("pelanggan"));
    }

    public function update(Request $request, $id){
        $pelanggan = Pelanggan::where("id", $id)->first();
        $pelanggan->update($request->all());

        return redirect()->route("pelanggan-index");
    }
}
