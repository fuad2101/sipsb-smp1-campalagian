@extends('dashboard')

@section('content')

<h1>Statistik Pendaftaran</h1>
<table class="table table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Status Daftar</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Dummy</td>
                <td> <span class="badge bg-warning">Verif</span></td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>Dummy</td>
                <td> <span class="badge bg-success">Lulus</span></td>
            </tr>
        </tbody>
</table>
@endsection
