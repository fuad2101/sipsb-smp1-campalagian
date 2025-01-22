<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Data Siswa</title>
</head>
<body>
    @foreach ($singleSiswa as $val)
    <p>Nama: {{$val->nama}}</p>
    <p>Nama: {{$val->foto}}</p>
    <p><img class="img img-thumbnail w-25" src=" {{asset('storage/'.$val->foto)}} " alt=""></p>
    @endforeach
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


</body>
</html>
