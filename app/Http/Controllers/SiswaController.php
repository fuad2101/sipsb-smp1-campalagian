<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request){
        $email = 'multy_muradewi@gmail.com';
        $foo =  Siswa::where('email',$email)->get();
        dd($foo);
        return view('pages.status');
    }
    public function store(){

    }
}
