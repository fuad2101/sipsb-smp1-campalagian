<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Http\FormRequest;

class SiswaController extends Controller
{

    public function index(Request $request){

        $noreg = Siswa::select('no_registrasi')->latest()->first();;

        if($noreg != NULL){
            $noreg = $noreg->no_registrasi + 1;
        }else {
            $noreg = 2025001;
        }
        // dd($noreg);

        // $nomor = Str::of($noreg)->padLeft(7,'202500');
        return view('pages.form')->with(['nomor'=>$noreg]);
    }

    public function status(){
        $email = auth()->user()->email;
        $foo =  Siswa::where('email',$email)->get();
        return view('pages.status')->with(['foo'=>$foo]);
    }


    public function store(FormRequest $request){

        // dd($request->file());
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

        $dok_tambahan ='';

        // $ijazah = $files['ijazah'];
        // $kk = $files['kk'];
        // $akta = $files['akta'];

        $noreg = Siswa::select('no_registrasi')->latest()->first();;

        if($noreg != NULL){
            $noreg = $noreg->no_registrasi + 1;
        }else {
            $noreg = 2025001;
        }

        if (isset($files['dok_tambahan'])) {
            $dok_tambahan = $files['dok_tambahan'];
            $dok_tambahan_ext = $dok_tambahan->getClientOriginalExtension();
            $dok_tambahan_name = $foto->getClientOriginalName();

            $insert = Siswa::create([
            'no_registrasi'=>$noreg,
            'nama'=>$request->nama,
            'nisn'=>$request->nisn,
            'email'=>auth()->user()->email,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'sekolah_asal'=>$request->sekolah_asal,
            'alamat'=>$request->alamat,
            'nomor'=>$request->nomor,
            'wali'=>$request->wali,
            'kk'=>'/storage/'.$kk->storeAs('kk',$request->nama.$randomTime.$kk_ext,'public'),
            'akta'=>'/storage/'.$akta->storeAs('akta',$request->nama.$randomTime.$akta_ext,'public'),
            'ijazah'=>'/storage/'.$ijazah->storeAs('ijazah',$request->nama.$randomTime.$ijazah_ext,'public'),
            'foto'=>'/storage/'.$foto->storeAs('foto',$request->nama.$randomTime.$foto_ext,'public'),
            'dok_tambahan'=>'/storage/'.$dok_tambahan->storeAs('dok_tambahan',$request->nama.$randomTime.$dok_tambahan_ext,'public'),
            'jalur_seleksi'=>$request->jalur_seleksi,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pend_terakhir'=>$request->pend_terakhir,
            'status_daftar'=>'Verifikasi',
            'status_seleksi'=>'Terjadwal',
            ]);

        }else{
            $insert = Siswa::create([
            'no_registrasi'=>$noreg,
            'nama'=>$request->nama,
            'nisn'=>$request->nisn,
            'email'=>auth()->user()->email,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'sekolah_asal'=>$request->sekolah_asal,
            'alamat'=>$request->alamat,
            'nomor'=>$request->nomor,
            'wali'=>$request->wali,
            'kk'=>'/storage/'.$kk->storeAs('kk',$request->nama.$randomTime.$kk_ext,'public'),
            'akta'=>'/storage/'.$akta->storeAs('akta',$request->nama.$randomTime.$akta_ext,'public'),
            'ijazah'=>'/storage/'.$ijazah->storeAs('ijazah',$request->nama.$randomTime.$ijazah_ext,'public'),
            'foto'=>'/storage/'.$foto->storeAs('foto',$request->nama.$randomTime.$foto_ext,'public'),
            'jalur_seleksi'=>$request->jalur_seleksi,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pend_terakhir'=>$request->pend_terakhir,
            'status_daftar'=>'Verifikasi',
            'status_seleksi'=>'Terjadwal',
            ]);
        }


        // $insert = Siswa::create([
        //     'no_registrasi'=>$noreg,
        //     'nama'=>$request->nama,
        //     'nisn'=>$request->nisn,
        //     'email'=>auth()->user()->email,
        //     'tempat_lahir'=>$request->tempat_lahir,
        //     'tanggal_lahir'=>$request->tanggal_lahir,
        //     'sekolah_asal'=>$request->sekolah_asal,
        //     'alamat'=>$request->alamat,
        //     'nomor'=>$request->nomor,
        //     'wali'=>$request->wali,
        //     'kk'=>'/storage/'.$kk->storeAs('kk',$request->nama.$randomTime.$kk_ext,'public'),
        //     'akta'=>'/storage/'.$akta->storeAs('akta',$request->nama.$randomTime.$akta_ext,'public'),
        //     'ijazah'=>'/storage/'.$ijazah->storeAs('ijazah',$request->nama.$randomTime.$ijazah_ext,'public'),
        //     'foto'=>'/storage/'.$foto->storeAs('foto',$request->nama.$randomTime.$foto_ext,'public'),
        //     'dok_tambahan'=>'/storage/'.$dok_tambahan->storeAs('dok_tambahan',$request->nama.$randomTime.$dok_tambahan_ext,'public'),
        //     'jalur_seleksi'=>$request->jalur_seleksi,
        //     'jenis_kelamin'=>$request->jenis_kelamin,
        //     'agama'=>$request->agama,
        //     'pend_terakhir'=>$request->pend_terakhir,
        //     ]);

            if ($insert) {
                Alert::success('Berhasil','Pendaftaran Berhasil, data kamu sedang dalam proses verifikasi admin');
                return redirect('/status');
            }
    }

    public function uploadBayar(FormRequest $request){

        $ext = $request->file('bukti_bayar')->getClientOriginalExtension();

        $email = auth()->user()->email;
        $bar = Siswa::where('email',$email)->first();
        $bar->bukti_bayar = $request->file('bukti_bayar')->storeAs('bukti_bayar',auth()->user()->name.'.'.$ext,'public');
        $bar->save();

        Alert::info('Upload Berhasil','Bukti bayar kamu berhasil diupload');
        return redirect()->back()->with('success','Upload bukti bayar berhasil');
    }

    public function download(){
        $email = auth()->user()->email;
        $data = Siswa::where('email',$email)->first();
        $pdf = Pdf::loadView('export.kartu-daftar', ['siswa'=>$data]);
        return $pdf->stream();
    }

    public function downloadSeleksi(){
        $email = auth()->user()->email;
        $data = Siswa::where('email',$email)->first();
        $pdf = Pdf::loadView('export.kartu-diterima', ['siswa'=>$data]);
        return $pdf->stream('Bukti Diterima.pdf');
    }
}
