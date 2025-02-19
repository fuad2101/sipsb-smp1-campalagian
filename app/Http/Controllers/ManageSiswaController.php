<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ManageSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view('pages.siswa.pendaftar')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singleSiswa = Siswa::where('id',$id)->first();
        return view('pages.siswa.showsiswa')->with(['siswa'=>$singleSiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->status_daftar = 'Lulus';
        $siswa->save();
        Alert::success('Berhasil','Status siswa Lulus');
        return redirect('/pendaftar');
    }

    public function updateSeleksi(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->status_seleksi = 'Lulus';
        $siswa->save();
        Alert::success('Berhasil','Status seleksi berhasil dirubah');
        return redirect('/pendaftar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
