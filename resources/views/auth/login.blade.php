<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Oxhen - Responsive HTML Template</title>
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
                                 <h5 class="text-white">Welcome!</h5>
                             <p class="text-white-50 mb-0 fs-14">Sign in to Continue to Oxhen..</p>
                             </div>
                         </div>
                         <div class="card-body position-relative">
                            <div class="p-4 mt-n5 bg-white card rounded pb-0">
                                <form>
                                    <div class="mb-3">
                                        <label class="fs-14 mb-2" for="user name">User Name</label>
                                        <input type="text" class="form-control" id="user name" placeholder="Enter Username">
                                    </div>
                                    <div class="mb-2">
                                        <label class="fs-14 mb-2" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter Password">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <a href="recoverpw.html" class="text-muted fs-13"><i class="mdi mdi-lock me-1"></i> Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Log in</button>
                                    </div>
                                </form>
                            </div>
                         </div>
                            <div class="row mt-2">
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
                            </div>
                     </div>
                     <div class="mt-5 text-center text-white-50">
                         <p>Don't have an account ? <a href="sign-up.html" class="fw-bold text-white"> Register</a> </p>
                         <p>©<script>document.write(new Date().getFullYear())</script> Oxhen. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
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
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
