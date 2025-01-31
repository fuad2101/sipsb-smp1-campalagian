@extends('layouts.sipsb.app')

@section('content')
    <h4 class="text-center">RESUME PENDAFTARAN</h4>
    <table class="table">
        @foreach ($singleSiswa as $val)
        <div class="row">
            <div class="col-lg-7">
                <tr>
                    <td>Nama:</td>
                    <td>{{$val->nama}}</td>
                </tr>
                <p><strong>Nama:</strong>  {{$val->nama}}</p>
                <p><strong>Email:</strong> {{$val->email}}</p>
                <p><strong>NISN:</strong>  {{$val->nisn}}</p>
            </div>
            <div class="col-lg-5">
                <img class="img img-thumbnail w-25" src=" {{asset('storage/'.$val->foto)}} " alt="">
            </div>
        </div>
        @endforeach
    </table>
    <form action="" class="btn" method="post">
        @csrf
        <button class="btn btn-primary" type="submit" onclick="confirm() ">Lulus Administrasi</button>
    </form>

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
