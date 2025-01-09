@extends('dashboard')

@section('content')
    <h2>Status Pendaftaran:
        @foreach ($foo as $val)
            @if ($val['status_daftar'] == 'verifikasi')
            <span class="badge bg-warning">Dalam proses Verifikasi</span> </h2>
            @else
            <span class="badge bg-success">Lulus Berkas</span> </h2>
            <form action="/upload-bayar" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Upload Bukti Pembayaran</label>

                <input class="form-control form-control-sm @error('bukti_bayar') is-invalid @enderror" type="file" name="bukti_bayar" id="" accept="image/*">
                @error('bukti bayar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
            </form>
            <a class="btn btn-primary my-4" target="_blank" href="/download">Download Kartu Pendaftaran</a>
            @endif
        @endforeach

@endsection
