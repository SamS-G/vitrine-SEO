<?php

use App\Http\Controllers\LocalServicesController;
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
    return view('pages.services.local.layouts.index');
})->name('intervention');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// SERVICES
Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('pages.services.layout.index');
    })->name('services.index');
    Route::get('/fenetres', function () {
        return view('pages.services.windowService');
    })->name('services.window');
    Route::get('/portes-entree', function () {
        return view('pages.services.doorService');
    })->name('services.door');
    Route::get('/portes-garage', function () {
        return view('pages.services.garageDoorService');
    })->name('services.garageDoor');
    Route::get('/revetement-de-sol', function () {
        return view('pages.services.flooringService');
    })->name('services.flooring');
    Route::get('/portail', function () {
        return view('pages.services.gateService');
    })->name('services.gate');
    Route::get('/volets-roulants', function () {
        return view('pages.services.shutterService');
    })->name('services.shutter');
    Route::get('/depannage-volets', function () {
        return view('pages.services.repairService');
    })->name('services.depannage');
    Route::get('/multi-services', function () {
        return view('pages.services.multiService');
    })->name('services.multiservice');

    // LOCALES ROUTES WITH DYNAMIC META-DATAS
    Route::get('/pose-{type}-{ville}', [ LocalServicesController::class, 'show']);
});







