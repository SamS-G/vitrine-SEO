<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalServicesController;
use Illuminate\Support\Facades\Route;

// PAGES STATIQUES
Route::view('/', 'pages.main.accueil')->name('home');
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
// 🔹 Génération dynamique des routes statiques
foreach ($services as $service) {
    Route::view("/services/pose-$service", "pages.services.pose-$service")
        ->name("services.pose-$service");
}
foreach ($exceptions as $exception) {
    Route::view("/services/$exception", "pages.services.$exception")
        ->name("services.$exception");
}
// ROUTES LOCALES DES SERVICES AVEC DYNAMIC META-DATAS
Route::get('services/pose-{type}-{ville}', [LocalServicesController::class, 'showService'])
    ->where([
        'type' => '[a-zA-Z-]+',
        'ville' => '[a-zA-Z-]+'
    ])
    ->name('services.local');
// ✅ Route alternative pour `/services/{type}-{ville}` (ex: depannage-volets-lagnieu)
Route::get('services/{type}-{ville}', [LocalServicesController::class, 'showService'])
    ->where([
        'type' => 'depannage-[a-zA-Z-]+|reparation|travaux-[a-zA-Z-]+',
        'ville' => '[a-zA-Z-]+'
    ])
    ->name('services.local.alt');

Route::get('prestations-{ville}', [LocalServicesController::class, 'showCityServices']);
// ✅ Gestion des erreurs 404
Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});

//ENVOI DU FORMULAIRE DE CONTACT
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');





