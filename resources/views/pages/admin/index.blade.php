@extends('dashboard')

@section('content')

    <div class="row mb-5">
        <a href="/admin/create" class="btn btn-success">Tambah</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        <b>{{ session('status') }}</b>
    </div>
    @endif

    <table class="table" id="myTable" >
        <thead class="thead-dark">
            <tr>
                <th scope="">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($val as $val)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->role}}</td>
                <td><a href="/admin/edit/{{$val->id}}" class="btn btn-warning">Edit</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
