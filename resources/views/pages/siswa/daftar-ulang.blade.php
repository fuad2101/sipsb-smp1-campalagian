@extends('dashboard')

@section('content')
<h1>Daftar Ulang</h1>
<form action="/daftar-ulang" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nomor Registrasi:</label>
            <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="no_registrasi" id="" aria-describedby="helpId" placeholder="" />
            @error('no_registrasi')
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
        {{-- <div class="mb-3">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select class="form-control form-control-sm" name="jenis_kelamin" id="">
                <option disabled selected>--Pilih--</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
        </div> --}}
        {{-- <div class="mb-3">
            <label for="" class="form-label">NISN</label>
            <input type="text" class="form-control form-control-sm @error('nisn') is-invalid @enderror"" value="" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            @error('nisn')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div> --}}
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
        {{-- <div class="mb-3">
            <label for="" class="form-label">Agama</label>
              <select class="form-control form-control-sm" name="agama" id="">
                <option disabled selected>--Pilih--</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Protestan">Protestan</option>
              </select>
        </div> --}}
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
            <label for="">Bukti Kelulusan</label><input class="form-control form-control-sm @error('bukti_kelulusan') is-invalid @enderror" type="file" name="bukti_kelulusan" id="" accept=".jpg,.jpeg">
                {{-- <div class="alert alert-warning" role="alert">
                  <h4 class="alert-heading"></h4>
                  <ul>
                    <li>Afirmasi: upload KIP/SKTM</li>
                    <li>Prestasi: upload sertifikat/nilairapor</li>
                    <li>Mutasi: upload SK Mutasi</li>
                  </ul>
                  <p class="mb-0"></p>
                </div> --}}
                @error('bukti_kelulusan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="" class="form-label">Nomor HP</label>
            <input type="text" class="form-control form-control-sm @error('nomor') is-invalid @enderror"" name="nomor" id="" aria-describedby="helpId" placeholder=""/>
            @error('nomor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div> --}}
        {{-- <div class="mb-3">
            <label for="" class="form-label">Pendidikan terakhir</label>
            <select class="form-control form-control-sm" name="pend_terakhir" id="">
                <option disabled selected>--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
            </select>
        </div> --}}
        {{-- <div class="mb-3">
            <label for="" class="form-label">Nama wali/orang tua asuh</label>
            <input type="text" class="form-control form-control-sm @error('wali') is-invalid @enderror"" name="wali" id="" aria-describedby="helpId" placeholder=""/>
            @error('wali')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div> --}}

        {{-- <div class="mb-3">
            <label for="" class="form-label">Jalur seleksi</label>
            <select class="form-control form-control-sm" name="jalur_seleksi" id="">
                <option disabled selected>--Pilih--</option>
                <option value="Zonasi">Zonasi</option>
                <option value="Afirmasi">Afirmasi</option>
                <option value="Prestasi">Prestasi</option>
                <option value="Mutasi">Mutasi</option>
            </select>
        </div> --}}
        {{-- <div class="row">
            <div class="col">
                <label class="form-label" for="">Upload Foto</label><input class="form-control form-control-sm @error('foto') is-invalid @enderror"" type="file" name="foto" id="" accept="image/.jpg,.jpeg,.png" required>
                @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for="">Kartu Keluarga</label><input class="form-control form-control-sm @error('kk') is-invalid @enderror" type="file" name="kk" id="" accept=".jpg,.jpeg" required>
                @error('kk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col">
                <label for="">Akta Kelahiran</label><input class="form-control form-control-sm @error('akta') is-invalid @enderror"" type="file" name="akta" id="" accept=".jpg,.jpeg" required>
                @error('akta')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="col">
                <label for=""> Ijazah/SKHU/Keterangan Lulus dr sekolah</label><input class="form-control form-control-sm @error('ijazah') is-invalid @enderror"" type="file" name="ijazah" id="" accept=".jpg,.jpeg" required>
                @error('ijazah')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div> --}}
        {{-- <div class="row mt-3">
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
        </div> --}}
        {{-- <div class="form-check my-3 font-weight-bold">
            <input type="checkbox" name="tes-online" id="bersedia" class="form-check-input" required><label class="form-check-label" for="bersedia">Dengan ini saya menyatakan bersedia mengikuti seleksi mengikuti tes secara offline</label>
        </div> --}}
        <button class="btn btn-primary mt-4 w-100" type="submit">Submit Daftar Ulang</button>
    </form>


@endsection

{{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
