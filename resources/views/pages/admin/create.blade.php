@extends('dashboard')

@section('content')

    <form action="/admin/create" method="post">
        @csrf
        <input class="form-control mb-3" type="text" name="name" value="" placeholder="Nama">
        <input class="form-control mb-3" type="text" name="email" placeholder="email" value="">
        <input class="form-control" type="password" name="password" placeholder="password" value="">

        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
            <div class="col">
                <a href="/admin" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>

@endsection
