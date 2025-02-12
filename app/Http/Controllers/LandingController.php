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
        $pkn = Guru::where('mata_pelajaran','Pendidikan Kewarganegaraan')->where('foto','!=','')->get();
        $pai = Guru::where('mata_pelajaran','Pendidikan Agama Islam')->where('foto','!=','')->get();
        $bhi = Guru::where('mata_pelajaran','Bahasa Indonesia')->where('foto','!=','')->get();
        $matematika = Guru::where('mata_pelajaran','Matematika')->where('foto','!=','')->get();
        $ipa = Guru::where('mata_pelajaran','IPA')->where('foto','!=','')->get();
        $ips = Guru::where('mata_pelajaran','IPS')->where('foto','!=','')->get();
        $bahasa_inggris = Guru::where('mata_pelajaran','bahasa inggris')->where('foto','!=','')->get();
        $sbd = Guru::where('mata_pelajaran','seni budaya')->where('foto','!=','')->get();
        $pjok = Guru::where('mata_pelajaran','PJOK')->where('foto','!=','')->get();
        $informatika = Guru::where('mata_pelajaran','Informatika')->where('foto','!=','')->get();
        $prakarya = Guru::where('mata_pelajaran','Prakarya')->where('foto','!=','')->get();
        $bimkol= Guru::where('mata_pelajaran','Bimbingan dan Konseling ')->where('foto','!=','')->get();
        $staff= Guru::where('mata_pelajaran','Staf Administrasi')->where('foto','!=','')->get();

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
