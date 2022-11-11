<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\postingan;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Http\Requests\StorepostinganRequest;
use App\Http\Requests\UpdatepostinganRequest;

class ControllerPost extends Controller
{
    public function index()
    {
      $post = Auth()->user()->post()->orderBy('updated_at','desc')->paginate(10);
      return view('Admin.Post.index',compact('post'));
    }

    public function create()
    {
      return view('Admin.Post.create',['kat'=>kategori::all()]);
    }

    public function store(StorepostinganRequest $req)
    {  
        $req['user_id'] = auth()->user()->id;
        postingan::create($req->all());
        return redirect()->route('post.index')
        ->with('status',"Post Sukses Di Buat");
    }

    public function show(postingan $post){
          return view('show',compact("post"));
    }

    public function edit(postingan $post){
      return view('Admin.Post.create',[
        'post' => $post,
        'kat' => kategori::all()
        ]);
    }

    public function update(UpdatepostinganRequest $req, postingan $post)
    {
        $s = $req->except(['_token', '_method']);
        $req['user_id'] = auth()->user()->id;
      
       if($post->slug != $s['slug']){
         $slug = Str::slug($s['slug']);
         $req->slug = "require|unique:postingan";
         $s['slug'] = $slug;
       }
       
        postingan::where('id',$post->id)
        ->update($s);
        return redirect()->route('post.index');
    }

    public function destroy(postingan $post)
    {
        postingan::destroy($post->id);
        return back()->with('status','Delete Success');
    }
    
    public function slug(Request $req){
    $c = Str::slug($req->judul);
    a:
    $slug = postingan::where('slug',$c)->first();
    $i = 1;
    if($slug){
      $c = $c.$i;
      $i++;
      goto a;
    }
     return Response()->json(['slug' => $c]);
    }
    
    
}
