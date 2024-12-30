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
                    <td>{{$val->nama}}</td>
                    <td>{{$val->nisn}}</td>
                    <td>{{$val->sekolah_asal}}</td>
                    <td> {{$val->status_daftar}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
