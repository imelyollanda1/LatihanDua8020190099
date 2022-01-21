<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request$request)
    {
        $data['objek']= \App\User::latest()->paginate(10);
        return view('user_index',$data);
    }
}
