<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services.index');
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

Route::get('/services/portail', function () {
    return view('pages.services.portails');
})->name('services.portails');

Route::get('/services/volets-roulants', function () {
    return view('pages.services.shutterService');
})->name('services.shutter');

Route::get('/services/depannage-volets', function () {
    return view('pages.services.depannage-volets');
})->name('services.depannage-volets');

