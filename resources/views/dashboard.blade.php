@extends('layouts.sipsb.app')


@php
$role = auth()->user()->role;
@endphp


@if ($role = auth()->user()->role == 'vip')

/****
VIP perspective
 ****/

    @section('content')
    VIP perspective
    @endsection

    @section('sidebar-menu')
    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Statistik Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="">
            <span class="icon-holder">
                <i class="anticon anticon-dashboard"></i>
            </span>
            <span class="title">Logout</span>
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

/****
Admin perspective
 ****/

    @elseif ($role = auth()->user()->role == 'admin')

    @section('content')
    Admin perspective
    @endsection

    @section('sidebar-menu')
    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-user"></i>
            </span>
            <span class="title">Daftar</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a href="/form">
            <span class="icon-holder">
                <i class="anticon anticon-bar-chart"></i>
            </span>
            <span class="title">Statistik</span>
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
            {{-- <span class="title">Logout</span> --}}
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

/****
User perspective
 ****/

@else
    @section('content')
    User perspective
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
