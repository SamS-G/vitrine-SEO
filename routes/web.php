<?php

use Illuminate\Support\Facades\Route;

// NAVBAR
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/realisations', function () {
    return view('pages.projects');
})->name('project');
Route::get('/qui-suis-je', function () {
    return view('pages.whoIam');
})->name('presentation');
Route::get('/marques', function () {
    return view('pages.brands');
})->name('brands');
Route::get('/zone-intervention', function () {
    return view('pages.local.layouts.index');
})->name('intervention');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// SERVICES
Route::get('/services', function () {
    return view('pages.services.layout.index');
})->name('services.index');
Route::get('/services/fenetres', function () {
    return view('pages.services.windowService');
})->name('services.window');
Route::get('/services/portes-entree', function () {
    return view('pages.services.doorService');
})->name('services.door');
Route::get('/services/portes-garage', function () {
    return view('pages.services.garageDoorService');
})->name('services.garageDoor');
Route::get('/services/revetement-de-sol', function () {
    return view('pages.services.flooringService');
})->name('services.flooring');
Route::get('/services/portail', function () {
    return view('pages.services.gateService');
})->name('services.gate');
Route::get('/services/volets-roulants', function () {
    return view('pages.services.shutterService');
})->name('services.shutter');
Route::get('/services/depannage-volets', function () {
    return view('pages.services.repairService');
})->name('services.depannage');
Route::get('/services/multi-services', function () {
    return view('pages.services.multiService');
})->name('services.multiservice');


// LOCALES ROUTES WITH DYNAMIC META-DATAS
Route::get('/pose-fenetres-{ville}', function ($ville) {
    $communes = [
        'amberieu-en-bugey' => [
            'name' => 'Ambérieu-en-Bugey',
            'latitude' => 45.9601,
            'longitude' => 5.3578,
            'postalCode' => '01500',
        ],
        'lagnieu' => [
            'name' => 'Lagnieu',
            'latitude' => 45.885,
            'longitude' => 5.348,
            'postalCode' => '01150',
        ],
        'meximieux' => [
            'name' => 'Meximieux',
            'latitude' => 45.905,
            'longitude' => 5.235,
            'postalCode' => '01800',
        ]
    ];

    if (!isset($communes[$ville])) {
        abort(404);  // Si la ville n'est pas trouvée, renvoyer une erreur 404
    }

    $city = $communes[$ville];
    $meta_title = "Pose de Fenêtres à {$city['name']} - JD Travaux Services";
    $meta_description = "JD Travaux Services propose la pose de fenêtres, portes et volets à {$city['name']}. Contactez-nous pour un devis sur-mesure.";

    $meta_schema = json_encode([
        "@context" => "https://schema.org",
        "@type" => "Service",
        "serviceType" => "Pose de fenêtres",
        "provider" => [
            "@type" => "LocalBusiness",
            "name" => "JD Travaux Services",
            "url" => url("/pose-fenetres-{$ville}"),
            "telephone" => "+33 6 12 34 56 78",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "123 Rue des Artisans",
                "addressLocality" => $city['name'],
                "postalCode" => $city['postalCode'],
                "addressCountry" => "FR",
            ],
        ],
        "areaServed" => [
            "@type" => "Place",
            "name" => $city['name'],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => $city['latitude'],
                "longitude" => $city['longitude'],
            ],
        ],
        "description" => "Pose de fenêtres sur-mesure à {$city['name']}. JD Travaux Services intervient rapidement pour tous vos besoins de menuiserie."
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    return view('pages.local', compact('meta_title', 'meta_description', 'meta_schema', 'city'));
});

