<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table{
            width: 100%;
            border-spacing: 0px;
        }
        th,td{
            padding: 10px;
            /* border: 1px solid black; */
        }
        td{
            text-align: center;
        }
        tr{
            margin: 0px;
        }
        h2,h3{
            text-align: center;
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
        .logo-sekolah,.logo-pemkab{
        height: 85px;
        }
        .tabel-data{
            border: 1px solid black;
        }
        .tabel-data td, thead th{
            border: 1px solid grey;
            padding: 5px;
        }
        .footer{
            margin-top: 30px;
            margin-left: 60%;
        }
    </style>
    <title>Laporan PPDB</title>
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

    <h3 style="margin-top:25px;margin-bottom:25px">LAPORAN REKAPITULASI HASIL SELEKSI <br> PENERIMAAN PESERTA DIDIK BARU 2025 <br> SMP NEGERI 1 CAMPALAGIAN</h3>

    <div>
        <table class="tabel-data">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Status Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$val->nama}}</td>
                    <td>{{$val->jenis_kelamin}}</td>
                    <td>{{$val->tempat_lahir}}</td>
                    <td>{{$val->tanggal_lahir}}</td>
                    <td>{{$val->agama}}</td>
                    <td>{{$val->status_daftar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Campalagian, ............................... 2025</p>
        {{-- <p style="text-align:right;margin-top:5%;">Campalagian, <?php echo date('d M Y') ?></p> --}}
        <p>Mengetahui,<br>Kepala Sekolah</p>
        <br>
        <br>
        <br>
        <br>
        <p><b>Ramli Syamsuddin, S.Pd., M.Si</b><br>Nip.19661231 199203 1 175</p>

    </div>

</body>
</html>
