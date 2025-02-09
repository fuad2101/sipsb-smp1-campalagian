@extends('dashboard')

@section('content')

    <div class="row mb-5">
        <a class="btn btn-success" href="/admin/create" target="_blank">Tambah</a>
    </div>

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
            <tr>
                <td>1</td>
                <td>Muhammad Fuad</td>
                <td>muhfuad67@gmail.com</td>
                <td>Admin</td>
                <td><span class="btn btn-warning">Edit</span><span class="btn btn-danger">Hapus</span></td>
            </tr>
        </tbody>
    </table>

@endsection
