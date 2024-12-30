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
                    <td>{{$val}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
