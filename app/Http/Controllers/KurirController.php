<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index(){
        $kurir = Kurir::all(); 

        return view('admin.kurir.index', compact("kurir"));

    }

    public function create(){
        return view('admin.kurir.create');
    }

    public function store(Request $request){
        Kurir::create($request->all());

        return redirect()->route('kurir-index');
        //return redirect()->route('');
    }

    public function destroy($id){
        $kurir = Kurir::where("id", $id)->first();
        $kurir->delete();

        return redirect()->route("kurir-index");
    }

    public function edit($id){
        $kurir = Kurir::where("id", $id)->first();
        return view("admin.kurir.edit", compact("kurir"));
    }

    public function update(Request $request, $id){
        $kurir = Kurir::where("id", $id)->first();
        $kurir->update($request->all());

        return redirect()->route("kurir-index");
    }
}
