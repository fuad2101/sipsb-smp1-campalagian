<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(FormRegisRequest $request){
        $files = $request->file();
        $randomTime = '.'.time().'.';

        $foto = $files['foto'];
        $foto_ext = $foto->getClientOriginalExtension();
        $foto_name = $foto->getClientOriginalName();

        $ijazah = $files['ijazah'];
        $ijazah_ext = $ijazah->getClientOriginalExtension();
        $ijazah_name = $ijazah->getClientOriginalName();

        $akta = $files['akta'];
        $akta_ext = $akta->getClientOriginalExtension();
        $akta_name =$akta->getClientOriginalName() ;

        $kk = $files['kk'];
        $kk_ext = $kk->getClientOriginalExtension();
        $kk_name = $kk->getClientOriginalName();

        //dd($files);
        $ijazah = $files['ijazah'];
        $kk = $files['kk'];
        $akta = $files['akta'];


        Siswa::create([
            'nama'=>$request->nama,
            'nisn'=>$request->nisn,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'sekolah_asal'=>$request->sekolah_asal,
            'alamat'=>$request->alamat,
            'nomor'=>$request->nomor,
            'wali'=>$request->wali,
            'kk'=>$kk->storeAs('KK',$request->nama.$randomTime.$kk_ext),
            'akta'=>$akta->storeAs('Akta',$request->nama.$randomTime.$akta_ext),
            'ijazah'=>$ijazah->storeAs('Ijazah',$request->nama.$randomTime.$ijazah_ext),
            'foto'=>$foto->storeAs('Foto',$request->nama.$randomTime.$foto_ext),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pend_terakhir'=>$request->pend_terakhir,
            'status_daftar'=>'verfikasi',
            ]);

    redirect('/dashboard');
    }
}
