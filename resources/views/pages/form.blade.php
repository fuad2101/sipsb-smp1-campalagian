@extends('layouts.sipsb.app')

@section('content')
<div>
    <h1>Form Pendaftaran</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder=""/>
            <small id="helpId" class="form-text text-muted">Nama Sesuai Ijazah</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select class="form-control form-control-sm" name="" id="">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NISN</label>
            <input type="text" class="form-control form-control-sm" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control form-control-sm" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tanggal lahir</label>
            <input type="date" class="form-control form-control-sm" name="nisn" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sekolah asal</label>
            <input type="text" class="form-control form-control-sm" name="asal" id="" aria-describedby="helpId" placeholder=""/>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Agama</label>
              <label for=""></label>
              <select class="form-control form-control-sm" name="" id="">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Protestan</option>
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
            <select class="form-control form-control-sm" name="" id="">
                <option>SD</option>
                <option>SMP</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama wali/orang tua asuh</label>
            <input type="text" class="form-control form-control-sm" name="wali" id="" aria-describedby="helpId" placeholder=""/>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Upload Foto</label><input class="form-control form-control-sm" type="file" name="" id="">
            </div>
            <div class="col">
                <label for="">Kartu Keluarga</label><input class="form-control form-control-sm" type="file" name="" id="">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Akta Kelahiran</label><input class="form-control form-control-sm" type="file" name="" id="">
            </div>
            <div class="col">
                <label for=""> Ijazah/SKHU/Keterangan Lulus dr sekolah</label><input class="form-control form-control-sm" type="file" name="" id="">
            </div>
        </div>
        <button class="btn btn-primary mt-4 form-control" type="submit">Submit Pendaftaran</button>

    </form>
</div>
@endsection

@section('sidebar-menu')
    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Formulir Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-form"></i>
            </span>
            <span class="title">Status Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="/helpdesk">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Helpdesk</span>
        </a>
    </li>
    {{-- <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="anticon anticon-pie-chart"></i>
            </span>
            <span class="title">Dropdown</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="">Dropdown 1</a>
            </li>
            <li>
                <a href="">Dropdown 2</a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="anticon anticon-file"></i>
            </span>
            <span class="title">Multi Level</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="nav-item dropdown">
                <a href="javascript:void(0);">
                    <span>Level 1</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="">Level 2.1</a>
                    </li>
                    <li>
                        <a href="">Level 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li> --}}
    @endsection

