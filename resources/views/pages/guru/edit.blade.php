@extends('dashboard')

@section('content')

    <form action="/guru/edit" method="post">
        @csrf
        <input class="form-control" type="text" value="{{$val->nama}}">
        <input class="form-control" type="text" placeholder="Alamat" value="{{$val->alamat}}">
        <input class="form-control" type="text" placeholder="Mata Pelajaran" value="{{$val->mata_pelajaran}}">
        <input class="form-control" type="text" placeholder="Jabatan" value="{{$val->jabatan}}">
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
