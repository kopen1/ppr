<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\postingan;
use App\Models\user;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    public function __invoke()
    {
        return view('Admin.dashboard',['user'=> Auth()->user()]);
        /*,[
          'kategori' => kategori::all(),
          'postingan' => postingan::all(),
          ]*/
    }
}
