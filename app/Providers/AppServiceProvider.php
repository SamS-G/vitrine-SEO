<?php

namespace App\Providers;

use App\Models\MetaSchema;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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
        Cache::remember('base_meta_schema', now()->addDays(7), function () {
            $baseSchema = MetaSchema::join('services', 'meta_schemas.service_id', '=', 'services.id')
                ->where('services.slug', 'base')
                ->firstOrFail()
                ?? file_get_contents(public_path("meta.schema.json"));

            View::share('base_meta_schema', $baseSchema);

        });
    }
}
