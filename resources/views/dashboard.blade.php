@extends('layouts.sipsb.app')


@php
$role = auth()->user()->role;
@endphp


@if ($role == "vip")


    @section('content')
    <img  class="img img-thumbnail w-50" src=" {{asset('/storage/home-1-new.png')}} " alt="">
    @endsection

    @section('sidebar-menu')
    <li class="nav-item dropdown">
        <a href="/statistik">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Statistik Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="/pendaftar">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Data Pendaftar</span>
        </a>
    </li>
    <li class="nav-item dropdown" style="padding:10px 15px;">
            <span class="icon-holder">
                <i class="anticon anticon-logout"></i>
            </span>
            <form action="{{ route('logout') }}" method="post" class="d-inline">
            @csrf
            <button class="btn" >Logout</button>
            </form>
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


    @elseif ($role == 'admin')

    @section('content')
    <div class="opacity-50">
        <img  class="img img-thumbnail w-100 h-50" src=" {{asset('/storage/home-1-new.png')}} " alt="">
        @endsection
    </div>

    @section('sidebar-menu')
    <li class="nav-item dropdown">
        <a href="/pendaftar">
            <span class="icon-holder">
                <i class="anticon anticon-user"></i>
            </span>
            <span class="title">Data Pendaftar</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="/statistik">
            <span class="icon-holder">
                <i class="anticon anticon-bar-chart"></i>
            </span>
            <span class="title">Statistik</span>
        </a>
    </li>
    {{-- <li class="nav-item dropdown" style="padding:10px 15px;">
            <span class="icon-holder">
                <i class="anticon anticon-logout"></i>
            </span>
            <form action="{{ route('logout') }}" method="post" class="d-inline">
            @csrf
            <button class="btn" >Logout</button>
            </form> --}}
            {{-- <span class="title">Logout</span> --}}
    {{-- </li> --}}
    <li class=  "nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="anticon anticon-user"></i>
            </span>
            <span class="title">Tenaga Pengajar</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="/kepsek">Kepala Sekolah</a>
            </li>
            <li>
                <a href="/guru">Guru</a>
            </li>
        </ul>
    </li>
    <li class=  "nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="anticon anticon-swap"></i>
            </span>
            <span class="title">Manajemen User</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="">Admin</a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown" style="padding:10px 15px;">
        <span class="icon-holder">
            <i class="anticon anticon-logout"></i>
        </span>
        <form action="{{ route('logout') }}" method="post" class="d-inline">
        @csrf
        <button class="btn" >Logout</button>
        </form>
        {{-- <span class="title">Logout</span> --}}
    </li>
    {{-- <li class="nav-item dropdown">
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

@else
    @section('content')
    <img  class="img img-thumbnail w-full" src=" {{asset('/storage/home-1-new.png')}} " alt="">
    @endsection
    @section('sidebar-menu')

    @if (\App\Models\Siswa::where('email',auth()->user()->email)->first() == NULL)

    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Formulir Pendaftaran</span>
        </a>
    </li>

    @endif


    <li class="nav-item dropdown">
        <a href="/status">
            <span class="icon-holder">
                <i class="anticon anticon-form"></i>
            </span>
            <span class="title">Status Pendaftaran</span>
        </a>
    </li>
    {{-- <li class="nav-item dropdown">
        <a href="/helpdesk">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Helpdesk</span>
        </a>
    </li> --}}
    <li class="nav-item dropdown" style="padding:10px 15px;">
            <span class="icon-holder">
                <i class="anticon anticon-logout"></i>
            </span>
            <form action="{{ route('logout') }}" method="post" class="d-inline">
            @csrf
            <button class="btn" >Logout</button>
            </form>
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
    @push('script')
    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/67a184d3825083258e0fbff3/1ij7etmm9';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->
    @endpush
@endif




{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
