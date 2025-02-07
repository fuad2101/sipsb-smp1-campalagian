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
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nama Guru</td>
                <td>Mata Pelajaran</td>
                <td><span class="btn btn-warning">Edit</span><span class="btn btn-danger">Hapus</span></td>
            </tr>
        </tbody>
    </table>

@endsection
