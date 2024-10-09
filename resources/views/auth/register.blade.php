<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap v5.3.2 Landing Page Template" />
        <meta name="keywords" content="bootstrap v5.3.2, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />

        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="/oxhen-template/css/bootstrap.min.css" type="text/css" />

        <!-- Icon -->
        <link rel="stylesheet" href="/oxhen-template/css/materialdesignicons.min.css" type="text/css" />

        <!-- css -->
        <link rel="stylesheet" href="/oxhen-template/css/style.min.css" type="text/css" />


    </head>
    <body class="vh-100 bg-account-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="javascript:void(0)" class="d-block auth-logo">
                            <img src="images/logo-dark.png" alt="" height="24" class="logo logo-dark">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="p-4">
                     <div class="card overflow-hidden mt-2">
                         <div class="text-center bg-primary position-relative">
                             <div class="img-overlay"></div>
                             <div class="position-relative pt-4 py-5 mb-1">
                                 <h5 class="text-white">Selamat datang!</h5>
                             <p class="text-white-50 mb-0 fs-14">Silahkan daftar untuk membuat akun baru</p>
                             </div>
                         </div>
                         <div class="card-body position-relative">
                            <div class="p-4 mt-n5 bg-white card rounded pb-0">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="fs-14 mb-2" for="first name">First Name</label>
                                        <input type="text" class="form-control" name="name" id="first name" placeholder="First Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="fs-14 mb-2" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>
                                    <div class="mb-2">
                                        <label class="fs-14 mb-2" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <a href="recoverpw.html" class="text-muted fs-13"><i class="mdi mdi-lock me-1"></i> Forgot password?</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                    </div>
                                </form>
                            </div>
                         </div>
                        {{-- <div class="row mt-2">
                            <div class="col-12">
                                <div class="text-center plan-line">
                                    or sign up with
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center my-3">
                            <div class="col-lg-6">
                                <ul class="list-unstyled btn-social-icon mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                     </div>
                     <div class="mt-5 text-center text-white-50">
                         <p>Sudah punya akun? <a href="/login" class="fw-bold text-white"> Login</a> </p>
                         <p>©<script>document.write(new Date().getFullYear())</script> Created by <a href="https://www.mandar.web.id" class="fst-italic text-reset" target="_blank" >mandar.web.id</a> with <i class="mdi mdi-heart text-danger"></i></p>
                     </div>
                    </div>
                 </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>

    </body>
</html>
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
