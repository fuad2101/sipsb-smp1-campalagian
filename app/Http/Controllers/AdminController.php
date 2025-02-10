<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Exports\SiswasExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
        $data = User::where('role','admin')->get();
        return view('pages.admin.index')->with(['val'=>$data]);
    }

    public function show($id){
        $singleSiswa = Siswa::where('id',$id)->first();
        return view('pages.admin.showsiswa')->with(['siswa'=>$singleSiswa]);
    }

    public function store(Request $request){
        $create = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'admin',
            'password'=>Hash::make($request->password),
        ]);

        if ($create) {
            Alert::success('Berhasil','Status siswa Lulus');
            return redirect('/admin');
        }
    }

    public function create(){
        return view('pages.admin.create');
    }

    public function edit($id){
        $data = User::where('id',$id)->first();
        return view('pages.admin.edit')->with(['val'=>$data]);
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin')->with('status', 'Akun Admin'.$user->name.' Dihapus!');
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
