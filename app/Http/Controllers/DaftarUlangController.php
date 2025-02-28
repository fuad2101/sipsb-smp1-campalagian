<?php

namespace App\Http\Controllers;

use App\Models\DaftarUlang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.siswa.daftar-ulang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = DaftarUlang::create([
            'no_registrasi'=>$request->no_registrasi,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'sekolah_asal'=>$request->sekolah_asal,
            'alamat'=>$request->alamat,
            ]);

        if ($insert) {
            Alert::success('Berhasil','Daftar Ulang Berhasil !');
            return redirect('/status');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarUlang $daftarUlang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarUlang $daftarUlang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarUlang $daftarUlang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarUlang $daftarUlang)
    {
        //
    }
}
