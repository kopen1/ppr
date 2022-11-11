<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;
class ControllerKategori extends Controller
{
    function index(){
      return view('Admin.kategori.kategori',[
        'data' => kategori::all()
        ]);
    }
    
    function store(){
      $v = Request()->validate([
        'name' => 'required',
        'slug' => 'required'
        ]);
      kategori::create($v);
      return redirect()->route('kategori.index')
      ->with('status','Sukses Di Tambah');
    }
    
    function edit(){
        return view('Admin.kategori.kategori',[
        'data' => kategori::all()
        ]);
    }
    
    function destroy($id){
      kategori::destroy($id);
      return back();
    }
}
