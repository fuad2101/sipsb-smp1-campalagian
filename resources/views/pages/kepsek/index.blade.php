@extends('dashboard')

@section('content')

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
            @foreach ($val as $val)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$val->nama}}</td>
                    <td>{{$val->alamat}}</td>
                    <td><a href="/kepsek/edit" class="btn btn-warning">Edit <a href="" class="btn btn-danger">Hapus</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
