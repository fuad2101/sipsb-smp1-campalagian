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

    public function show($id){
        $singleSiswa = Siswa::where('id',$id)->get();
        return view('pages.admin.showsiswa')->with(['singleSiswa'=>$singleSiswa]);
    }
}
