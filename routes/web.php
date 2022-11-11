<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllHome;
use App\Http\Controllers\ControllerLogin;

//Admin
use App\Http\Controllers\Admin\ControllerDashboard;
use App\Http\Controllers\Admin\ControllerPost;
use App\Http\Controllers\Admin\ControllerKategori;



// Log-in & Daftar
Route::resource('/ppr/login',ControllerLogin::class)->middleware('guest');


//
Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/',[ControllerDashboard::class,'__invoke']);
    Route::get('post/slug',[ControllerPost::class,'slug']);
    Route::resource('post',ControllerPost::class);
    Route::resource('kategori',ControllerKategori::class)
           ->except('show');
});



//Home
Route::controller(ControllHome::class)->group(function(){
  Route::get('/','index')->name('home');
  Route::get('/kategori/{slug}','kat')->name("kategori");
  Route::get('/post/{slug}','detail')->name('blog.detail');
});


Route::fallback(fn()=>redirect('/'));

