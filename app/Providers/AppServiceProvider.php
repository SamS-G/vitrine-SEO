<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $fileSchema = file_get_contents(public_path("meta.schema.json"))
            ??
            json_encode([
                "@context" => "https://schema.org",
                "@type" => "HomeAndConstructionBusiness",
                "name" => "JD Travaux Services",
                "image" => "https://jdtravauxservices.fr/logo.webp",
                "description" => "Entreprise specialise dans la pose et le dépannage de volets roulants, pose de moustiquaires, installation de portes et portails, fenêtres et baies vitrées. Service professionnel et intervention rapide.",
                "@id" => "https://jdtravauxservices.fr",
                "url" => "https://jdtravauxservices.fr",
                "telephone" => "0689442815",
                "address" =>
                    [
                        "@type" => "PostalAddress",
                        "streetAddress" => "Votre adresse",
                        "addressLocality" => "Sainte-Julie",
                        "postalCode" => "01150",
                        "addressCountry" => "FR"
                    ],
                "geo" =>
                    [
                        "@type" => "GeoCoordinates",
                        "latitude" => "45.86976687650793",
                        "longitude" => "5.279457151184211"
                    ],
            ],
                JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        View::share('base_meta_schema', $fileSchema);
    }
}
