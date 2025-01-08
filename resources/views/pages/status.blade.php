@extends('dashboard')

@section('content')
    <h2>Status Pendaftaran:
        @foreach ($foo as $val)
            @if ($val['status_daftar'] == 'verifikasi')
        <span class="badge bg-warning">Dalam proses Verifikasi</span> </h2>
        @else
        <span class="badge bg-success">Lulus Berkas</span> </h2>
        Silahkan download pendaftaran
        <form action="/download">
            <button class="btn btn-lg btn-primary">Download Kartu Daftar </button>
        </form>
        @endif
        @endforeach

@endsection
