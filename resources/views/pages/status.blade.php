@extends('dashboard')

@section('content')


    <div class="card text-center">
        <div class="card-header">
            {{-- <p>Status Pendaftaran dan Status Seleksi</p> --}}
        </div>
        <div class="card-body">
            <h2>Status Pendaftaran:</h2>
            @foreach ($foo as $val)
                @if ($val['status_daftar'] == '')
                    <p class="card-text">Status Pendaftaran: Kamu Belum Melakukan Pendaftaran. Silahkan Isi Form Pendaftaran</p>
                @elseif ($val['status_daftar'] == 'Verifikasi')
                    <h1 class="text-warning">Dalam proses Verifikasi</h1>
                @else
                    <h1 class="text-success font-weight-bold">Lulus Berkas</h1>
                    <a class="btn btn-success btn-lg" target="_blank" href="/download">Download Kartu Pendaftaran</a>
                @endif
            @endforeach

            <h2 class="mt-4">Status Seleksi:</h2>
                @if ($val['status_seleksi'] == 'Lulus')
                    <h1 class="card-text text-info font-weight-bold">Lulus Seleksi</h1>
                    <a class="btn btn-info btn-lg" target="_blank" href="/download-bukti-diterima">Download Bukti Diterima</a>
                @else
                    <h1 class="text-warning">Terjadwal</h1>
                @endif
        </div>
    </div>




        {{-- Pengumuman Status daftar --}}
        {{-- @foreach ($foo as $val)
            @if ($val['status_daftar'] == '')
                <h2>Status Pendaftaran: Kamu Belum Melakukan Pendaftaran. Silahkan Isi Form Pendaftaran</h2>
            @endif

            @if ($val['status_daftar'] == 'Verifikasi')
                <h2>Status Pendaftaran:<span class="badge bg-warning">Dalam proses Verifikasi</span> </h2>
            @else
                <h2>Status Pendaftaran:<span class="badge bg-success">Lulus Berkas</span> </h2></h2>
                <a class="btn btn-success my-4" target="_blank" href="/download">Download Kartu Pendaftaran</a>
            @endif
        @endforeach --}}

        {{-- Pengumuman Hasil Seleksi --}}
        {{-- @foreach ($foo as $val)
            @if ($val['status_seleksi'] == 'Lulus')
                <h2>Status Seleksi:<span class="badge bg-success">Lulus Seleksi</span> </h2></h2>
                <a class="btn btn-success my-4" target="_blank" href="/download">Download Bukti Diterima</a>
            @else
                <h2>Status Seleksi:<span class="badge bg-warning">Terjadwal</span></h2>
            @endif
        @endforeach --}}
@endsection
