<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
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
        RateLimiter::for('chirps', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        RateLimiter::for('register', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        RateLimiter::for('login', function (Request $request) {
            $username = strtolower(trim((string) $request->input('username', '')));

            return [
                // Slow down guessing a specific account from a specific IP
                Limit::perMinute(5)->by($username.'|'.$request->ip()),

                // Also cap total login attempts from one IP
                Limit::perMinute(30)->by($request->ip()),
            ];
        });
    }
}
