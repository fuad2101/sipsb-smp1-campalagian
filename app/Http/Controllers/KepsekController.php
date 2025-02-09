<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Guru::where('jabatan','kepala sekolah')->get();
        return view('pages.kepsek.index')->with(['val'=>$data]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data=Guru::where('jabatan','kepala sekolah')->first();
        return view('pages.kepsek.edit')->with(['val'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $kepsek = Guru::where('jabatan','kepala sekolah')->first();
        // dd($kepsek);
        if ($request->nama != $kepsek->nama || $request->alamat != $kepsek->alamat) {
            $kepsek->nama = $request->nama ;
            $kepsek->alamat = $request->alamat ;
            $kepsek->save();
            Alert::success('Berhasil','Data berhasil disimpan');
            return redirect()->action([KepsekController::class,'index']);
        }else{
            Alert::info('Info','Tidak ada data yang dirubah');
            return redirect()->action([KepsekController::class,'index']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
