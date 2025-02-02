<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table{
            border: 1px solid black;
            width: 100%;
        }
        th,td{
            padding: 10px;
            border: 1px solid black;

        }
        td{
            text-align: center;
        }
        tr{
            margin: 0px;
        }
        h2{
            text-align: center;
        }
    </style>
    <title>Laporan PPDB</title>
</head>

<body>
    <img src="{{public_path('/storage/logo.png')}}" alt="">
    <h2>Laporan PPDB 2024</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Status Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$val->nama}}</td>
                    <td>{{$val->jenis_kelamin}}</td>
                    <td>{{$val->tempat_lahir}}</td>
                    <td>{{$val->tanggal_lahir}}</td>
                    <td>{{$val->agama}}</td>
                    <td>{{$val->status_daftar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
