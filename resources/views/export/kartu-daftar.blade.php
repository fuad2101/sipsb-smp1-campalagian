<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        h2,h3{
        text-align: center;
        }
        .container{
        border: 1px solid black;
        }
        table-container{
        }
        table td{
        padding: 10px;
        }
        .foto{
        max-height: 25%;
        }
        .logo-sekolah,.logo-pemkab{
        height: 85px;
        }
        .header{
            width: 100%;
        }
        .header p{
            text-align: center;
            line-height: 3px;
        }
        .header p{
            font-size: 20px;
        }
        .header p:last-child{
            font-size: 12px;
        }
    </style>
    <title>Kartu Pendaftaran</title>
</head>
<body>
    <table class="header">
        <tr>
            <td>
                <img class="logo-pemkab" src="{{public_path('logo-polman.png')}}" alt="">
            </td>
            <td>
                <p>PEMERINTAH KABUPATEN POLEWALI MANDAR</p>
                <p>DINAS PENDIDIKAN DAN KEBUDAYAAN</p>
                <p>SMP NEGERI 1 CAMPALAGIAN</p>
                <p>Alamat: Jl. Poros Majene Desa Bonde Kec. Campalagian Kab. Polewali Mandar</p>
            </td>
            <td><img class="logo-sekolah" src="{{public_path('logo-sekolah.jpg')}}" alt=""></td>
        </tr>
    </table>
    <hr>

    <h3>KARTU PENDAFTARAN CALON PESERTA DIDIK BARU <br> SMPN 1 CAMPALAGIAN</h3>
    <div class="container">
        <div class="foto-container">
            <img class="foto" src="{{public_path($siswa->foto)}}" alt="">
        </div>
        <div class="table-container">
            <table class="">
                <tbody>
                    <tr>
                        <td scope="row"><b>Nama:</b> </td>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>NISN:</b></td>
                        <td>{{$siswa->nisn}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Alamat:</b></td>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Email:</b></td>
                        <td>{{$siswa->email}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Jenis Kelamin:</b></td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Tempat Lahir:</b></td>
                        <td>{{$siswa->tempat_lahir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Tanggal Lahir:</b></td>
                        <td>{{$siswa->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Sekolah Asal:</b></td>
                        <td>{{$siswa->sekolah_asal}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Nomor:</b></td>
                        <td>{{$siswa->nomor}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Wali:</b></td>
                        <td>{{$siswa->wali}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Agama</b></td>
                        <td>{{$siswa->agama}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Pendidikan Terakhir:</b></td>
                        <td>{{$siswa->pend_terakhir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Status:</b></td>
                        <td>{{$siswa->status_daftar}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p>"Demikian data pribadi ini saya buat dengan sebenarnya dan bila ternyata isian yang dibuat tidak benar, saya bersedia menanggung akibat hukum yang ditimbulkannya"</p>

    <p>Campalagian, </p>

    <div class="footer">
        <p>Menyetujui</p>
        <div>
            <p>Orangtua/wali</p>
            <p>Siswa terdaftar</p>
        </div>
        <div>
            <p>.............</p>
            <p>.............</p>
        </div>
    </div>

</body>
</html>
