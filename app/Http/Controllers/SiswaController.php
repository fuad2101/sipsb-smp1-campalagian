<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request){
        $status = auth()->user()->id;
        dd($status);
        return view('pages.status');
    }
    public function store(){

    }
}
