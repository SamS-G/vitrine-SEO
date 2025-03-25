<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RedirectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $redirects = config('redirections');
        foreach ($redirects as $oldPath => $newPath) {
            Route::redirect($oldPath, $newPath, 301);
        }
    }
}
