<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Reset Password</title>
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
                                 <h5 class="text-white">Reset Password</h5>
                             <p class="text-white-50 p-5 mb-0 fs-15">Lupa password? Jangan khawatir, isi email kamu yang sudah terdaftar sebelumnya. Link reset adakan dikirim ke email tersebut</p>
                             <x-auth-session-status class="mb-4 text-white" :status="session('status')" />
                             </div>
                         </div>
                         <div class="card-body position-relative">
                            <div class="p-4 mt-n5 bg-white card rounded pb-0">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="fs-14 mb-2" for="user name">Email</label>
                                        <input type="email" class="form-control" name="email" id="user name" placeholder="Enter Email">
                                        @error('email')
                                                <div class="text-danger text-sm">{{$message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Kirim Link Reset Password</button>
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
                    </div>
                 </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>

    </body>
</html>


{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
