@extends('dashboard')

@section('content')
    <form action="/kepsek/edit" method="post">
        @csrf
        <input class="form-control" type="text" value="{{$val->nama}}" name="nama">
        <input class="form-control" type="text" value="{{$val->alamat}}" name="alamat">
        <button class="btn btn-primary mt-3" type="submit">Update</button>
    </form>

@endsection
