<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- 1. WAJIB TAMBAH IMPORT INI

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
        // Tambahkan ini untuk memaksa HTTPS di Vercel
        if (config('app.env') !== 'local') {
            URL::forceScheme('https'); // <-- 2. UBAH JADI SEPERTI INI (Tanpa backslash)
        }
    }
}