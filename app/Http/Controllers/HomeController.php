<?php

namespace App\Http\Controllers;

use App\Services\GooglePlacesService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    protected GooglePlacesService $googlePlacesService;
    public function __construct(GooglePlacesService $googlePlacesService) {
        $this->googlePlacesService = $googlePlacesService;
    }

    public function index(): View|Application|Factory
    {

        $reviews = $this->googlePlacesService->getReviews();

        return view('pages.main.accueil', compact('reviews'));
    }
}
