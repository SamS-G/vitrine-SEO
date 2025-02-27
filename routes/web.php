<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalServicesController;
use App\Http\Middleware\FixTypeAndVille;
use App\Models\City;
use App\Models\Service;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// PAGES STATIQUES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/services', 'pages.main.services')->name('services');
Route::view('/realisations', 'pages.main.realisations')->name('realisations');
Route::view('/presentation-jdtravauxservices', 'pages.main.presentation-jdtravauxservices')->name('presentation');
Route::view('/nos-marques', 'pages.main.nos-marques')->name('marques');
Route::view('/zone-interventions', 'pages.services.local.layouts.index')->name('zone-interventions');
Route::view('/contact', 'pages.main.contact')->name('contact');

// ROUTES GÉNÉRIQUES DES SERVICES
$services = [
    'volets-roulants',
    'portes-entree',
    'fenetres',
    'portes-garage',
    'portails',
    'revetements-sol',
    'reparation-volets-roulants',
    'travaux-batiment',
    'moustiquaires'
];
$exceptions = [
    'reparation-volets-roulants',
    'travaux-batiment'
];
// Génération dynamique des routes statiques
foreach ($services as $service) {
    Route::view("/services/pose-$service", "pages.services.pose-$service")
        ->name("services.pose-$service");
}
foreach ($exceptions as $exception) {
    Route::view("/services/$exception", "pages.services.$exception")
        ->name("services.$exception");
}

// ROUTES LOCALES DES SERVICES AVEC DYNAMIC META-DATAS
Route::get('services/{type}-{ville}', [LocalServicesController::class, 'showService'])
    ->middleware(FixTypeAndVille::class)
    ->name('services.local');

// Index des Services par ville
Route::get('prestations-{ville}', [LocalServicesController::class, 'showCityServices']);

//ENVOI DU FORMULAIRE DE CONTACT
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// SITEMAP GLOBAL
Route::get('/sitemap.xml', function () {
    $routes = [
        ['loc' => url('/'), 'priority' => '1.0'],
        ['loc' => url('/contact'), 'priority' => '0.8'],
        ['loc' => url('//presentation-jdtravauxservices'), 'priority' => '0.7'],
        ['loc' => url('/services'), 'priority' => '0.9'],
        ['loc' => url('/zone-interventions'), 'priority' => '0.6'],
        ['loc' => url('/nos-marque'), 'priority' => '0.5'],
        ['loc' => url('/mentions-legales'), 'priority' => '0.5'],
        ['loc' => url('/utilisation-donnees'), 'priority' => '0.5'],
        ['loc' => url('/plan-site'), 'priority' => '0.7'],
    ];

// Ajoute le sitemap des pages locales
    $routes[] = ['loc' => url('/sitemap-local.xml'), 'priority' => '0.9'];

    return response()->view('sitemap.global', compact('routes'))->header('Content-Type', 'application/xml');
});

// SITEMAP LOCAL
Route::get('/sitemap-local.xml', function () {
    $services = Service::all();
    $cities = City::all();
    $routes = [];

    foreach ($services as $service) {
        foreach ($cities as $city) {
            $routes[] = [
                'loc' => url("/services/{$service->slug}-{$city->slug}"),
                'priority' => '0.7'
            ];
        }
    }

    return Response::view('sitemap.local', compact('routes'))->header('Content-Type', 'application/xml');
});

// ✅ Gestion des erreurs 404
Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});


