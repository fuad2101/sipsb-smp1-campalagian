@extends('dashboard')

@section('content')

    <form action="/guru/edit/{{$val->id}}" method="post">
        @csrf
        <input class="form-control" type="text" name="nama" value="{{$val->nama}}">
        <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="{{$val->alamat}}">
        <input class="form-control" type="text" name="mata_pelajaran" placeholder="Mata Pelajaran" value="{{$val->mata_pelajaran}}">
        <input class="form-control" type="text" name="jabatan" placeholder="Jabatan" value="{{$val->jabatan}}">
        <div class="row">
            <div class="col">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            <div class="col">
                <a href="/guru" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>

@endsection
