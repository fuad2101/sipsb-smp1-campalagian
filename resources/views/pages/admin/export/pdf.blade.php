@extends('layouts.export.export-pdf')

@section('content')
<h1>Laporan PPDB 2024</h1>
@foreach ($data as $val)
    {{$val->nama}}
@endforeach

@endsection
