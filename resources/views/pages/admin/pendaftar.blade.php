@extends('dashboard')

@section('content')
    Rekap Pendaftar
    <table class="table" id="myTable" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Asal Sekolah</th>
                <th>Status Daftar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $val)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> <a href="#">{{$val->nama}}</a></td>
                    <td>{{$val->nisn}}</td>
                    <td>{{$val->sekolah_asal}}</td>
                    <td>
                        @if ($val->status_daftar == 'verfikasi')
                            <span
                                class="badge bg-warning"
                                >Verifikasi</span
                            >
                        @else
                            <span
                                class="badge bg-success text-white"
                                >Lulus Berkas</span
                            >
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
