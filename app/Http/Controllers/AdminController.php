<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Siswa::all();
        return view('pages.admin.pendaftar')->with(['data'=>$data]);
    }
}
