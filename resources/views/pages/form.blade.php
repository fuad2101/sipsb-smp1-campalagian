@extends('dashboard')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div>
    <h1>Form Pendaftaran</h1>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div> Pendaftaran hanya bisa dilakukan <strong>SATU KALI</strong> pastikan semua data telah sesuai sebelum melakukan submit </div>
    </div>
    <hr>
    <form action="/form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nomor Registrasi:</label>
            <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror"  value="{{$nomor}}" name="nama" id="" aria-describedby="helpId" placeholder="" disabled />
            @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
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
                <option disabled selected>--Pilih--</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
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
                <option disabled selected>--Pilih--</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Protestan">Protestan</option>
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
                <option disabled selected>--Pilih--</option>
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

        <div class="mb-3">
            <label for="" class="form-label">Jalur seleksi</label>
            <select class="form-control form-control-sm" name="jalur_seleksi" id="">
                <option disabled selected>--Pilih--</option>
                <option value="Zonasi">Zonasi</option>
                <option value="Afirmasi">Afirmasi</option>
                <option value="Prestasi">Prestasi</option>
                <option value="Mutasi">Mutasi</option>
            </select>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="">Upload Foto</label><input class="form-control form-control-sm @error('foto') is-invalid @enderror"" type="file" name="foto" id="" accept="image/.jpg,.jpeg,.png">
                @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for="">Kartu Keluarga</label><input class="form-control form-control-sm @error('kk') is-invalid @enderror"" type="file" name="kk" id="" accept=".jpg,.jpeg">
                @error('kk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Akta Kelahiran</label><input class="form-control form-control-sm @error('akta') is-invalid @enderror"" type="file" name="akta" id="" accept=".jpg,.jpeg">
                @error('akta')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for=""> Ijazah/SKHU/Keterangan Lulus dr sekolah</label><input class="form-control form-control-sm @error('ijazah') is-invalid @enderror"" type="file" name="ijazah" id="" accept=".jpg,.jpeg">
                @error('ijazah')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col dok_tambahan">
                <label for="">Dokumen Tambahan (Untuk jalur seleksi Afirmasi, Prestasi dan Mutasi) </label><input class="form-control form-control-sm @error('ijazah') is-invalid @enderror" type="file" name="dok_tambahan" id="" accept=".jpg,.jpeg">

                <div class="alert alert-warning" role="alert">
                  <h4 class="alert-heading"></h4>
                  <ul>
                    <li>Afirmasi: upload KIP/SKTM</li>
                    <li>Prestasi: upload sertifikat/nilairapor</li>
                    <li>Mutasi: upload SK Mutasi</li>
                  </ul>
                  <p class="mb-0"></p>
                </div>
                @error('dok_tambahan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-check my-3 font-weight-bold">
            <input type="checkbox" name="tes-online" id="bersedia" class="form-check-input" required><label class="form-check-label" for="bersedia">Dengan ini saya menyatakan bersedia mengikuti seleksi mengikuti tes secara offline</label>
        </div>
        <button class="btn btn-primary mt-4 form-control" type="submit">Submit Pendaftaran</button>
    </form>
</div>
@endsection

@push('script')
<script>
    $(function () {
        $('.dok_tambahan').hide();
        $('[name="jalur_seleksi"]').change(function() {
            if ($(this).val() === 'Zonasi') {
                $('.dok_tambahan').hide(1000);
            }else{
               $('.dok_tambahan').show(1000);
            }
        })
    });
</script>
@endpush



