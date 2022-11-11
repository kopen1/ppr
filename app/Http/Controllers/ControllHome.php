<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\CursorPaginator;

use App\Models\postingan as post;
use App\Models\kategori;

class ControllHome extends Controller
{
    public function index(){
      return view('home',["post" => post::paginate(10)]);
    }
    
    public function detail(post $slug){
    return view('detail',["post" => $slug]);
    }
    
    public function kat($slug){
    $i = kategori::where('slug',$slug)
    ->first();
    return view('kategori',[
      'i' => $i,
      'post' => $i->post()->paginate(10),
      ]);
    }
    
    
}
