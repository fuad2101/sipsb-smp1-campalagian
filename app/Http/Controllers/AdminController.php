<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function store($id){
        $siswa = Siswa::find($id);
        $siswa->status_daftar = 'lulus';
        $siswa->save();
        return redirect('/pendaftar');
    }

    public function export($type){
        if ($type == 'pdf') {
            $data = Siswa::all();
            $pdf = Pdf::loadView('pages.admin.export.pdf',['data'=>$data]);
            return $pdf->download('Laporan PPDB 2024.pdf');
        }elseif ($type == 'xls') {
            return "Export Excel";
        }
    }
}
