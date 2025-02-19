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
        .tabel-data{
            border-spacing: 0px;
            border: 1px solid black;
            width: 100%;
            scale: 20px;
        }
        .table-container td{
            border-bottom: 1px solid black;
            padding: 5px;
        }
        .table-container{
            /* background-color:aliceblue; */
            /* width: 100%; */
        }
        table td{
            padding: 10px;
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
        .footer {
            margin-top: 45px;
            padding: 10px;
            font-size: 20px;
            font-weight: 200;
            text-align: center;
            background-color:limegreen;
        }
        .coba1{
            /* background-color: yellow; */
            position:absolute;
            /* top: -800px; */
            right: 20px;
            z-index: 10;

        }
        .coba2{
            /* background-color: orange; */
            position: absolute;
        }
        .flex-container{
            margin-top: 5px;
            overflow:visible;
            /* border: 1px black solid; */
        }
        .foto-siswa{
            position: absolute;
            max-height: 35%;
            right: 5%;
            top: 250px;
        }

    </style>
    <title>Kartu Lulus Seleksi</title>
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

    <h3>HASIL SELEKSI PENERIMAAN PESERTA DIDIK BARU <br> SMPN NEGERI 1 CAMPALAGIAN</h3>
    <p>Berdasarkan seleksi Penerimaan Peserta Didik Baru SMP Negeri 1 Campalagian periode 2025/2026, diputuskan bahwa:</p>
    <div class="container">
        <div class="table-container">
            <table class="tabel-data">
                <tbody>
                    <tr>
                        <td scope="row"><b>No. Peserta:</b> </td>
                        <td>{{$siswa->no_registrasi}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Sekolah Asal:</b></td>
                        <td>{{$siswa->sekolah_asal}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Nama:</b> </td>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Tanggal Lahir:</b></td>
                        <td>{{$siswa->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>NISN:</b></td>
                        <td>{{$siswa->nisn}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        Selamat Anda dinyatakan DITERIMA!
        Dalam Seleksi Penerimaan Peserta Didik Baru di SMP Negeri 1 Campalagian Tahun Pelajaran 2025/2026
    </div>
</body>
</html>
