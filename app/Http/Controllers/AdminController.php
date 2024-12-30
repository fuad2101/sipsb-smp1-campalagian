<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = ['data1','data2','data3'];
        return view('pages.admin.pendaftar')->with(['data'=>$data]);
    }
}
