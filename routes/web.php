<?php

use App\Http\Controllers\LocalServicesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ACCUEIL
Route::get('/', function () {
    return view('pages.accueil');
});
Route::get('/zone-interventions', function () {
    return view('pages.services.local.layouts.index');
});

// LOCALES ROUTES WITH DYNAMIC META-DATAS
Route::get('services/pose-{type}-{ville}', [LocalServicesController::class, 'show']);

// SERVICES
Route::get('/services', function () {
    return view('pages.services.layout.index');
});
Route::get('services/{slug}', function ($slug) {
    return view("pages.services.$slug");
});



// ROUTES GENERIQUES
Route::get('/{slug}', function ($slug) {
    if ($slug !== 'services') {
        return view("pages.$slug");
    }
    return abort(404);
});


