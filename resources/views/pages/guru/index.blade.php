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
                <th>Mata Pelajaran</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($val as $val)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$val->nama}}</td>
                    <td>{{$val->alamat}}</td>
                    <td>{{$val->mata_pelajaran}}</td>
                    <td>{{$val->jabatan}}</td>
                    <td><a href="/guru/edit/{{$val->id}}" target="_blank" class="btn btn-sm btn-warning">Edit<a href="" class="btn btn-sm btn-danger">Hapus</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
