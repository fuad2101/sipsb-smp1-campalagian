<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is-admin', function (User $user){
            return $user->role === 'admin' || $user->role === 'vip';
        });

        Schema::defaultStringLength(191);
    }
}
