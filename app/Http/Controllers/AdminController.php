<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\SiswasExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin.index');
    }

    public function show($id){
        $singleSiswa = Siswa::where('id',$id)->first();
        return view('pages.admin.showsiswa')->with(['siswa'=>$singleSiswa]);
    }

    public function store($id){
        $siswa = Siswa::find($id);
        $siswa->status_daftar = 'Lulus';
        $siswa->save();
        Alert::success('Berhasil','Status siswa Lulus');
        return redirect('/pendaftar');
    }

    public function export($type){
        if ($type == 'pdf') {
            $data = Siswa::all();
            $pdf = Pdf::loadView('export.report',['data'=>$data]);
            return $pdf->stream('Laporan PPDB 2024.pdf');
        }elseif ($type == 'xls') {
            return Excel::download(new SiswasExport, 'Laporan PPDB.xlsx');
        }
    }
}
