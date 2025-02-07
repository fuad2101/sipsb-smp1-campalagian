@extends('dashboard')

@section('content')

    <div class="row mb-5">
        <a class="btn btn-danger mr-2" href="/export/pdf" target="_blank">Export PDF</a>
        <a class="btn btn-success" href="/export/xls" target="_blank">Export Excel</a>
    </div>

    <table class="table" id="myTable" >
        <thead class="thead-dark">
            <tr>
                <th scope="">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ramli Syamsuddin</td>
                <td>Jl. Poros Majene Desa Bonde Kec. Campalagian</td>
                <td><a href="/kepsek/edit" class="btn btn-warning">Edit</span><span class="btn btn-danger">Hapus</span></td>
            </tr>
        </tbody>
    </table>

@endsection
