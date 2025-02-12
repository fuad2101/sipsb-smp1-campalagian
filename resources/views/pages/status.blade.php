@extends('dashboard')

@section('content')
    <h2>Status Pendaftaran:
        @foreach ($foo as $val)
            @if ($val['status_daftar'] == 'verifikasi')
                <span class="badge bg-warning">Dalam proses Verifikasi</span> </h2>
            @else
                <span class="badge bg-success">Lulus Berkas</span> </h2>
                @if ($val['bukti_bayar'] == '')
                <form action="/upload-bayar" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Upload Bukti Pembayaran</label>
                    <input class="form-control form-control-sm @error('bukti_bayar') is-invalid @enderror" type="file" name="bukti_bayar" id="" accept="image/*">
                    @error('bukti bayar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror

                    @if (session('success'))
                    <div class="alert alert-success">
                        <b>{{ session('success') }}</b>
                    </div>
                    @endif

                    <button class="btn btn-sm btn-primary mt-3" type="submit">Upload</button>
                </form>
                @else
                <h2>Status Bayar : <span class="badge bg-success">Lunas</span></h2>
                @endif
                {{-- <form action="/upload-bayar" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Upload Bukti Pembayaran</label>
                    <input class="form-control form-control-sm @error('bukti_bayar') is-invalid @enderror" type="file" name="bukti_bayar" id="" accept="image/*">
                    @error('bukti bayar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror

                    @if (session('success'))
                    <div class="alert alert-success">
                        <b>{{ session('success') }}</b>
                    </div>
                    @endif

                    <button class="btn btn-sm btn-primary mt-3" type="submit">Upload</button>
                </form> --}}

                <a class="btn btn-success my-4" target="_blank" href="/download">Download Kartu Pendaftaran</a>
            @endif
        @endforeach

@endsection
