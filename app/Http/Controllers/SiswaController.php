<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Siswa;
use Illuminate\Foundation\Http\FormRequest;

class SiswaController extends Controller
{
    public function index(Request $request){
        $email = auth()->user()->email;
        $foo =  Siswa::where('email',$email)->get();
        return view('pages.status')->with(['foo'=>$foo]);
    }

    public function store(FormRequest $request){
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
            'email'=>auth()->user()->email,
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
            ]);

            Alert::success('Berhasil','Pendaftaran Berhasil, data kamu sedang dalam proses verifikasi admin');
            return redirect()->back();
    }

    public function uploadBayar(FormRequest $request){

        $ext = $request->file('bukti_bayar')->getClientOriginalExtension();

        $email = auth()->user()->email;
        $bar = Siswa::where('email',$email)->first();
        $bar->bukti_bayar = $request->file('bukti_bayar')->storeAs('Bukti_Bayar',auth()->user()->name.'.'.$ext);
        $bar->save();

        Alert::info('Upload Berhasil','Bukti bayar kamu berhasil diupload');
        return redirect()->back();
    }

    public function download(){
        $email = auth()->user()->email;
        $data = Siswa::where('email',$email)->first();
        // dd($data);
        $pdf = Pdf::loadView('export.view.kartu-daftar', ['data'=>$data]);
        return $pdf->download('kartu-pendaftaran.pdf');
        // return view('export.view.kartu-daftar')->with(['data'=>$data]);
    }


}
