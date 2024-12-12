<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(FormRegisRequest $request){
        /* dd($request->file(["foto"]));
        $ext = $request->file(["foto"]);
        $name = $request->file(["foto"])->getClientOriginalName();
        $files = $request->file(); */

        Storage::putFileAs('foto',$request->file('foto'),'foto-'.auth()->user()->name.$request->user()->id);

        Siswa::create([
            'nama'=>$request->nama,
            'nisn'=>$request->nisn,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'sekolah_asal'=>$request->sekolah_asal,
            'alamat'=>$request->alamat,
            'nomor'=>$request->nomor,
            'wali'=>$request->wali,
            'kk'=>'kk.pdf',
            'akta'=>'akta.pdf',
            'ijazah'=>'ijazah.pdf',
            'foto'=>$request->file('foto')->storeAs('foto','foto'.$request->user()->id),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pend_terakhir'=>$request->pend_terakhir,
            'status_daftar'=>'verfikasi',
            ]);



    }
}
