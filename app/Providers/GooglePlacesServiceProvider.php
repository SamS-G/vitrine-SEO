<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GooglePlacesService;

class GooglePlacesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(GooglePlacesService::class, function ($app) {
            return new GooglePlacesService();
        });
    }

    public function boot()
    {
        //
    }
}
