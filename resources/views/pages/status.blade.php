@extends('dashboard')

@section('content')

        {{-- Pengumuman Status daftar --}}
        @foreach ($foo as $val)
            @if ($val['status_daftar'] === '')
                <h2>Status Pendaftaran: Kamu Belum Melakukan Pendaftaran. Silahkan Isi Form Pendaftaran</h2>
            @endif

            @if ($val['status_daftar'] == 'Verifikasi')
                <h2>Status Pendaftaran:<span class="badge bg-warning">Dalam proses Verifikasi</span> </h2>
            @else
                <h2>Status Pendaftaran:<span class="badge bg-success">Lulus Berkas</span> </h2></h2>
                <a class="btn btn-success my-4" target="_blank" href="/download">Download Kartu Pendaftaran</a>
            @endif
        @endforeach

        {{-- Pengumuman Hasil Seleksi --}}
        @foreach ($foo as $val)
            @if ($val['hasil_seleksi'] == 'lulus')
                <span class="badge bg-success">Lulus Berkas</span> </h2>
                <a class="btn btn-success my-4" target="_blank" href="/download">Download Bukti Diterima</a>
                @if ($val['bukti_bayar'] == '')
                <p>No. Rekening 0700020000245895 Atas Nama: SMPN 1 Camapalagian</p>
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
            @endif
        @endforeach



@endsection
