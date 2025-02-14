<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaSchema;
use App\Models\City;
use App\Models\Service;

class MetaSchemasSeeder extends Seeder
{
    public function run()
    {
        $services = Service::all(); // Récupère tous les services de la base
        $cities = City::all(); // Récupère toutes les villes de la base

        foreach ($services as $service) {
            // Décoder les variations JSON en tableau associatif
            $service_variations = json_decode($service->variations, true);

            foreach ($cities as $city) {
                MetaSchema::create([
                    'service_id' => $service->id,
                    'city_id' => $city->id,
                    'meta_title' => "{$service->name} à {$city->name} - JD Travaux Services",
                    'meta_description' => "JD Travaux Services propose {$service->name} à {$city->name}, incluant {$service_variations['service-1']}{$city->name}, {$service_variations['service-2']}{$city->name}, et {$service_variations['service-3']}{$city->name}.",
                    'meta_schema' => json_encode([
                        "@context" => "https://schema.org",
                        "@type" => "Service",
                        "serviceType" => $service->name,
                        "provider" => [
                            "@type" => "LocalBusiness",
                            "name" => "JD Travaux Services",
                            "url" => url("/services/{$service->slug}-{$city->slug}")
                        ],
                        "areaServed" => [
                            "@type" => "Place",
                            "name" => $city->name,
                            "geo" => [
                                "@type" => "GeoCoordinates",
                                "latitude" => $city->latitude,
                                "longitude" => $city->longitude
                            ]
                        ],
                        "description" => "{$service->name} sur-mesure à {$city->name}. JD Travaux Services intervient près de {$city->landmarks[0]}, {$city->landmarks[1]}, et {$city->landmarks[2]}."
                    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                ]);
            }
        }
    }
}


