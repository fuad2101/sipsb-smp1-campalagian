@extends('dashboard')

@section('content')
<div>
    <h1>Form Pendaftaran</h1>
    <hr>
    <form action="/form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror"  value="" name="nama" id="" aria-describedby="helpId" placeholder=""/>
            @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select class="form-control form-control-sm" name="jenis_kelamin" id="">
                <option selected value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
              </select>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NISN</label>
            <input type="text" class="form-control form-control-sm @error('nisn') is-invalid @enderror"" value="" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            @error('nisn')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"" value="" name="tempat_lahir" id="" aria-describedby="helpId" placeholder=""/>
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tanggal lahir</label>
            <input type="date" class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"" name="tanggal_lahir" id="" aria-describedby="helpId" placeholder=""/>
            @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sekolah asal</label>
            <input type="text" class="form-control form-control-sm @error('sekolah_asal') is-invalid @enderror"" name="sekolah_asal" id="" aria-describedby="helpId" placeholder=""/>
            @error('sekolah_asal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Agama</label>
              <select class="form-control form-control-sm" name="agama" id="">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="protestan">Protestan</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat lengkap</label>
            <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror"" name="alamat" id="" aria-describedby="helpId" placeholder=""/>
            @error('alamat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nomor HP</label>
            <input type="text" class="form-control form-control-sm @error('nomor') is-invalid @enderror"" name="nomor" id="" aria-describedby="helpId" placeholder=""/>
            @error('nomor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pendidikan terakhir</label>
            <select class="form-control form-control-sm" name="pend_terakhir" id="">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama wali/orang tua asuh</label>
            <input type="text" class="form-control form-control-sm @error('wali') is-invalid @enderror"" name="wali" id="" aria-describedby="helpId" placeholder=""/>
            @error('wali')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="row">
            <div class="col">
                <label for="">Upload Foto</label><input class="form-control form-control-sm @error('foto') is-invalid @enderror"" type="file" name="foto" id="" accept="image/.jpg,.jpeg,.png">
                @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for="">Kartu Keluarga</label><input class="form-control form-control-sm @error('kk') is-invalid @enderror"" type="file" name="kk" id="" accept=".pdf">
                @error('kk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Akta Kelahiran</label><input class="form-control form-control-sm @error('akta') is-invalid @enderror"" type="file" name="akta" id="" accept=".pdf">
                @error('akta')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for=""> Ijazah/SKHU/Keterangan Lulus dr sekolah</label><input class="form-control form-control-sm @error('ijazah') is-invalid @enderror"" type="file" name="ijazah" id="" accept=".pdf">
                @error('ijazah')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-4 form-control" type="submit">Submit Pendaftaran</button>

    </form>
</div>
@endsection

@push('script')
{{-- <script>
    $(function () {
        $('[name="foto"]').change(function() {
            alert($(this).val());
        })
    });
</script> --}}
@endpush



