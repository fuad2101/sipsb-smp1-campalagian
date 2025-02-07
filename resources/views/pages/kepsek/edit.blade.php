@extends('dashboard')

@section('content')

    <form action="/edit/kepsek" method="post">
        @csrf
        <input type="text" value="{{$val->nama}}">
        <input type="text" value="">
        <input type="text" value="">
        <input type="text" value="">
        <input type="text" value="">
        <input type="text" value="">
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>

@endsection
