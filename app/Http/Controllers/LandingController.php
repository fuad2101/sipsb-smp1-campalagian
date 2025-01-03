<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        $pkn = Guru::where('mata_pelajaran','Pendidikan Kewarganegaraan')->get();
        $pai = Guru::where('mata_pelajaran','Pendidikan Agama Islam')->get();
        $bhi = Guru::where('mata_pelajaran','Bahasa Indonesia')->get();
        $matematika = Guru::where('mata_pelajaran','Matematika')->get();
        $ipa = Guru::where('mata_pelajaran','IPA')->get();
        $ips = Guru::where('mata_pelajaran','IPS')->get();
        $bahasa_inggris = Guru::where('mata_pelajaran','bahasa inggris')->get();
        $sbd = Guru::where('mata_pelajaran','seni budaya')->get();
        $pjok = Guru::where('mata_pelajaran','PJOK')->get();
        $informatika = Guru::where('mata_pelajaran','Informatika')->get();
        $prakarya = Guru::where('mata_pelajaran','Prakarya')->get();
        $bimkol= Guru::where('mata_pelajaran','Bimbingan dan Konseling ')->get();
        $staff= Guru::where('mata_pelajaran','Staf Administrasi')->get();

        return view('welcome')->with([

            'pkn'=>$pkn,
            'pai'=>$pai,
            'bhi'=>$bhi,
            'matematika'=>$matematika,
            'ipa'=>$ipa,
            'ips'=>$ips,
            'bahasa_inggris'=>$bahasa_inggris,
            'sbd'=>$sbd,
            'pjok'=>$pjok,
            'informatika'=>$informatika,
            'prakarya'=>$prakarya,
            'bimkol'=>$bimkol,
            'staff'=>$staff,
            ]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
