<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       h2,h3{
        text-align: center;
        line-height: 5px;
       }
       .container{
        border: 1px solid black;
        display: flex;
        justify-content: space-between;
       }
       table td{
        padding: 10px;
       }
       .foto{
        height: 25%;
       }
       .logo-sekolah{
        height: 85px;
       }
    </style>
    <title>Kartu Pendaftaran</title>
</head>
<body>
    <img class="logo-sekolah" src="{{public_path('logo-sekolah.jpg')}}" alt="">
    <h2>Kartu Pendaftaran Calon Siswa</h2>
    <h3>SMP Negri 1 Campalagian</h3>
    <div class="container">
        <div class="">
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
        {{-- <div>
            <img class="foto" src="{{ public_path($siswa->foto) }}" alt="">
        </div> --}}
    </div>
    <p>"Demikian data pribadi ini saya buat dengan sebenarnya dan bila ternyata isian yang dibuat tidak benar, saya bersedia menanggung akibat hukum yang ditimbulkannya"
</p>

</body>
</html>
