<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Guru::all()->reject('jabatan','kepala sekolah');
        return view('pages.guru.index')->with(['val'=>$data]);
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
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Guru::where('id',$id)->first();
        return view('pages.guru.edit')->with(['val'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $guru = guru::where('id',$id)->first();
        dd($guru);
        if ($request->nama != $guru->nama || $request->alamat != $guru->alamat) {
            $guru->nama = $request->nama ;
            $guru->alamat = $request->alamat ;
            $guru->save();
            Alert::success('Berhasil','Data berhasil disimpan');
            return redirect()->action([GuruController::class,'index']);
        }else{
            Alert::info('Info','Tidak ada data yang dirubah');
            return redirect()->action([GuruController::class,'index']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
