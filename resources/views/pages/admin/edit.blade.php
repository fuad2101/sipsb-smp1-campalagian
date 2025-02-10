@extends('dashboard')

@section('content')

    <form action="/admin/create" method="post">
        @csrf
        @method('PATCH')
        <input class="form-control mb-3" type="text" name="name" placeholder="Nama" value="{{$val->name}}">
        <input class="form-control mb-3" type="text" name="email" placeholder="email" value="{{$val->email}}">
        <input class="form-control" type="password" name="password" placeholder="password" value="">

        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-primary" type="submit" disabled>Update</button>
            </div>
        </div>
    </form>
    <form action="/admin/edit/{{$val->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger" >Hapus</button>
    </form>

@endsection
