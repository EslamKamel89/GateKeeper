<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Features;
use Laravel\Telescope\Telescope;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        Telescope::night();
        Features::twoFactorAuthentication([
            'confirm' => false,
            'confirmPassword' => false,
        ]);
    }
}
