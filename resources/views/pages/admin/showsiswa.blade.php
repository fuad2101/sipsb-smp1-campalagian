<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Data Siswa</title>
</head>
<body>
    @foreach ($singleSiswa as $val)
    <p>Nama: {{$val->nama}}</p>
    <p>Nama: {{$val->foto}}</p>
    @endforeach
    <form action="" class="btn" >
        <button onclick="confirm()">Lulus Administrasi</button>
    </form>

    <script>
        function confirm() {
            Swal.fire("SweetAlert2 is working!");
        }
    </script>


</body>
</html>
