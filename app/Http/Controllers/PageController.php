<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        $nama_user = 'sysadmin';
        return view('about',['nama_user' => $nama_user]);
    }
}
