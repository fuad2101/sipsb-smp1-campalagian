@extends('layouts.sipsb.app')

@section('content')
    <h4 class="text-center">RESUME PENDAFTARAN</h4>
    <div class="row">
        <div class="col-12 col-lg-6">
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td scope="row"><b>Nama:</b> </td>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>NISN:</b></td>
                        <td>{{$siswa->nisn}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Alamat:</b></td>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Email:</b></td>
                        <td>{{$siswa->email}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Jenis Kelamin:</b></td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Tempat Lahir:</b></td>
                        <td>{{$siswa->tempat_lahir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Tanggal Lahir:</b></td>
                        <td>{{$siswa->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Sekolah Asal:</b></td>
                        <td>{{$siswa->sekolah_asal}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Nomor:</b></td>
                        <td>{{$siswa->nomor}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Wali:</b></td>
                        <td>{{$siswa->wali}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Agama</b></td>
                        <td>{{$siswa->agama}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Pendidikan Terakhir:</b></td>
                        <td>{{$siswa->pend_terakhir}}</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Status:</b></td>
                        <td>{{$siswa->status_daftar}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-lg-6">
            <img class="img img-thumbnail" src="{{$siswa->foto}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form action="" class="" method="post">
                @csrf
                <button class="btn btn-primary btn-lg mb-2" type="submit" onclick="confirm() ">Lulus Administrasi</button>
            </form>
            <a class="btn btn-lg btn-secondary" href="/pendaftar">Kembali</a>
        </div>
    </div>
    <script>
        function confirm(e) {
            preventDefault();

            Swal.fire({
            title: "Luluskan?",
            text: "Tindakan ini tidak dapat dibatalkan. Mohon dicek dengan baik",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Luluskan"
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Berhasil",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
            });
            a.preventDefault();

        }
    </script>
@endsection
