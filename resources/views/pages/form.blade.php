@extends('dashboard')

@section('content')
<div>
    <h1>Form Pendaftaran</h1>
    <hr>
    <form action="/form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control form-control-sm" value="Muhammad Fuad" name="nama" id="" aria-describedby="helpId" placeholder=""/>
            <small id="helpId" class="form-text text-muted">Nama Sesuai Ijazah</small>
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
            <input type="text" class="form-control form-control-sm" value="12345678" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control form-control-sm" value="Polewali" name="tempat_lahir" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tanggal lahir</label>
            <input type="date" class="form-control form-control-sm" name="tanggal_lahir" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sekolah asal</label>
            <input type="text" class="form-control form-control-sm" name="sekolah_asal" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
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
            <input type="text" class="form-control form-control-sm" name="alamat" id="" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nomor HP</label>
            <input type="text" class="form-control form-control-sm" name="nomor" id="" aria-describedby="helpId" placeholder=""/>
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
            <input type="text" class="form-control form-control-sm" name="wali" id="" aria-describedby="helpId" placeholder=""/>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Upload Foto</label><input class="form-control form-control-sm" type="file" name="foto" id="" accept="image/.jpg,.jpeg,.png">
            </div>
            <div class="col">
                <label for="">Kartu Keluarga</label><input class="form-control form-control-sm" type="file" name="kk" id="" accept=".pdf">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Akta Kelahiran</label><input class="form-control form-control-sm" type="file" name="akta" id="" accept=".pdf">
            </div>
            <div class="col">
                <label for=""> Ijazah/SKHU/Keterangan Lulus dr sekolah</label><input class="form-control form-control-sm" type="file" name="ijazah" id="" accept=".pdf">
            </div>
        </div>
        <button class="btn btn-primary mt-4 form-control" type="submit">Submit Pendaftaran</button>

    </form>
</div>
@endsection

@push('script')
<script>
    $(function () {
        $('[name="foto"]').change(function() {
            alert($(this).val());
        })
    });
</script>
@endpush



