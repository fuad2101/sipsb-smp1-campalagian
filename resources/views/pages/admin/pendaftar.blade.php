@extends('dashboard')

@section('content')

    <div class="row mb-5">
        <a class="btn btn-danger mr-2" href="/export/pdf" target="_blank">Export PDF</a>
        <a class="btn btn-success" href="/export/xls" target="_blank">Export Excel</a>
    </div>

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
                    <td> <a href="/pendaftar/{{$val->id}}" target="_blank">{{$val->nama}}</a></td>
                    <td>{{$val->nisn}}</td>
                    <td>{{$val->sekolah_asal}}</td>
                    <td>
                        @if ($val->status_daftar == 'verifikasi')
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
