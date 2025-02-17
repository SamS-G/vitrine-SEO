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
        $places = null;
        foreach ($services as $service) {
            // Décoder les variations JSON en tableau associatif
            $service_variations = json_decode($service->variations, true);

            foreach ($cities as $city) {
                if ($service->id !== 1) {
                    $places = json_decode($city->landmarks, true);
                    MetaSchema::create([
                        'service_id' => $service->id,
                        'city_id' => $city->id,
                        'meta_title' => "{$service->name} à {$city->name} - JD Travaux Services",
                        'meta_description' => "JD Travaux Services propose {$service->name} en bois, PVC et aluminium à {$city->name}, incluant {$service_variations['service-1']}{$city->name}, {$service_variations['service-2']}{$city->name}, et {$service_variations['service-3']}{$city->name}. Profitez d'une isolation thermique optimale avec nos produits de qualité.",
                        'meta_schema' => json_encode(
                            [
                                "@context" => "https://schema.org",
                                "@type" => "Service",
                                "name" => "{$service->name} à {$city->name}",
                                "hasOfferCatalog" => [
                                    "@type" => "OfferCatalog",
                                    "name" => "Catalogue de services - {$service->name}",
                                    "itemListElement" => [
                                        [
                                            "@type" => "ListItem",
                                            "position" => 1,
                                            "item" => [
                                                "@type" => "Service",
                                                "name" => "$service->name",
                                                "offers" => [
                                                    "@type" => "Offer",
                                                    "priceSpecification" => [
                                                        "@type" => "PriceSpecification",
                                                        "priceCurrency" => "EUR",
                                                        "minPrice" => 500,
                                                        "maxPrice" => 2000,
                                                    ],
                                                    "availability" => "https://schema.org/InStock",
                                                    "validFrom" => "2024-02-15",
                                                    "url" =>
                                                        "https://jdtravauxservices.fr/services/{$service->slug}-{$city->slug}",
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                "areaServed" => [
                                    "@type" => "Place",
                                    "name" => "{$city->name}",
                                    "geo" => [
                                        "@type" => "GeoCoordinates",
                                        "latitude" => "{$city->latitude}",
                                        "longitude" => "{$city->longitude}",
                                    ],
                                    "containedInPlace" =>[
                                        [
                                            "@type" => "Place",
                                            "name" => "{$places['place-1']}",
                                        ],
                                        [
                                            "@type" => "Place",
                                            "name" => "{$places['place-2']}",
                                        ],
                                        [
                                            "@type" => "Place",
                                            "name" => "{$places['place-3']}",
                                        ]
                                    ]
                                ],
                            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    ]);
                }
            }
        }
        MetaSchema::create([
            'service_id' => Service::where('slug', 'Base')->first()->id,
            'city_id' => City::where('slug', 'sainte-julie')->first()->id,
            'meta_title' => "JD Travaux Services entreprise locale de travaux dans le bâtiment",
            'meta_description' => "JD Travaux Services est spécialisé dans la pose de fenêtres, portes et volets, dépannage volets roulants et multi-services dans la région de la Plaine de l\'Ain.",
            'meta_schema' => json_encode(
                [
                    "@context" => "https://schema.org",
                    "@type" => "HomeAndConstructionBusiness",
                    "name" => "JD Travaux Services",
                    "image" => "https://jdtravauxservices.fr/logo.webp",
                    "description" => "Entreprise spécialisée dans la pose et le dépannage de volets roulants, pose de moustiquaires, installation de portes et portails, fenêtres et baies vitrées. Service professionnel et intervention rapide.",
                    "@id" => "https://jdtravauxservices.fr",
                    "url" => "https://jdtravauxservices.fr",
                    "telephone" => "0689442815",
                    "priceRange" => "€€",
                    "address" => [
                        "@type" => "PostalAddress",
                        "streetAddress" => "2246 route de la Plaine",
                        "addressLocality" => "Sainte-Julie",
                        "postalCode" => "01150",
                        "addressCountry" => "FR"
                    ],
                    "geo" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => "45.86976687650793",
                        "longitude" => "5.279457151184211"
                    ],
                    "sameAs" => [
                        "https://www.facebook.com/JDTravauxServices",
                        "https://www.instagram.com/jdtravaux"
                    ],
                    "openingHoursSpecification" => [
                        [
                            "@type" => "OpeningHoursSpecification",
                            "dayOfWeek" => [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens" => "08:00",
                            "closes" => "18:00"
                        ]
                    ],
                    "areaServed" => [
                        "@type" => "GeoCircle",
                        "geoMidpoint" => [
                            "@type" => "GeoCoordinates",
                            "latitude" => "45.86976687650793",
                            "longitude" => "5.279457151184211"
                        ],
                        "geoRadius" => "50000"
                    ],
                    "hasOfferCatalog" => [
                        "@type" => "OfferCatalog",
                        "name" => "Services de menuiserie en porte, fenêtre, volet et dépannage",
                        "itemListElement" => [
                            [
                                "@type" => "ListItem",
                                "position" => 1,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de volets roulants",
                                    "description" => "Installation professionnelle de volets roulants en aluminium, PVC ou bois. Améliorez la sécurité et l'isolation de votre maison avec nos services rapides et efficaces.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "150-500"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-volets-roulants"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 2,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Dépannage de volets roulants",
                                    "description" => "Service de réparation et dépannage urgent de volets roulants. Nos techniciens qualifiés interviennent rapidement pour résoudre tous vos problèmes de volets.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "80-200"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "GeoCircle",
                                        "geoMidpoint" => [
                                            "@type" => "GeoCoordinates",
                                            "latitude" => "45.86976687650793",
                                            "longitude" => "5.279457151184211"
                                        ],
                                        "geoRadius" => "30000"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/depannage-volets-roulants"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 3,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de moustiquaires",
                                    "description" => "Installation de moustiquaires sur mesure pour vos fenêtres et portes. Profitez d'un intérieur sans insectes en toute tranquillité.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "50-150"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-moustiquaires"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 4,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de portes d'entrée",
                                    "description" => "Pose de portes d'entrée sécurisées et design. Choisissez parmi une large gamme de modèles et de matériaux pour trouver la porte parfaite pour votre maison.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "800-2500"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-portes-entree"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 5,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de portes de garage",
                                    "description" => "Installation de portes de garage sectionnelles, basculantes ou enroulables. Optimisez l'accès à votre garage avec nos solutions pratiques et esthétiques.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "1200-3000"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/service/pose-portes-garage"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 6,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de portails",
                                    "description" => "Pose de portails sur mesure, coulissants ou battants, en aluminium, PVC ou fer forgé. Embellissez votre propriété et sécurisez votre accès avec nos portails de qualité.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "1500-4000"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-de-portails"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 7,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de fenêtres et baies vitrées",
                                    "description" => "Pose de fenêtres et baies vitrées en bois, PVC ou aluminium. Apportez luminosité et confort à votre intérieur avec nos solutions sur mesure.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "500-2000"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-de-fenetres-baies-vitrees"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 8,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Pose de revêtements de sol",
                                    "description" => "Installation de revêtements de sol de tous types : parquet, carrelage, moquette, etc. Transformez votre intérieur avec des sols esthétiques et durables.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "30-150"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/pose-revetements-de-sol"
                                ]
                            ],
                            [
                                "@type" => "ListItem",
                                "position" => 9,
                                "item" => [
                                    "@type" => "Service",
                                    "name" => "Multi-services dans le bâtiment",
                                    "description" => "Divers travaux de maintenance et d'installation dans le bâtiment : plomberie, électricité, peinture, etc. Une solution complète pour tous vos besoins.",
                                    "priceSpecification" => [
                                        "@type" => "PriceSpecification",
                                        "priceCurrency" => "EUR",
                                        "value" => "Sur devis"
                                    ],
                                    "serviceArea" => [
                                        "@type" => "AdministrativeArea",
                                        "name" => "Plaine de l'Ain"
                                    ],
                                    "url" => "https://jdtravauxservices.fr/services/multi-services-batiment"
                                ]
                            ]
                        ]
                    ]
                ]
            ),
        ]);
    }
}


