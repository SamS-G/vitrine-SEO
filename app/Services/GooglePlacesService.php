<?php

namespace App\Services;

use App\Exceptions\GoogleReviewException;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GooglePlacesService
{
    protected string $apiKey;
    protected string $placeId;
    protected string $cacheDuration;

    public function __construct()
    {
        $this->apiKey = config('services.google_places.api_key');
        $this->placeId = config('services.google_places.place_id');
        $this->cacheDuration = config('services.google_places.cache_duration');
    }

    public function getReviews()
    {
        return Cache::remember("google_reviews_{$this->placeId}", $this->cacheDuration, function () {
            return $this->fetchReviewFromApi();
        });
    }

    protected function fetchReviewFromApi()
    {
        $url = 'https://places.googleapis.com/v1/places';
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-Goog-Api-Key' => $this->apiKey,
                'X-Goog-FieldMask' => 'name,rating,reviews',
            ])->get("$url/{$this->placeId}");

            if ($response->successful()) {
                return $response->json();
            }
        } catch (Exception $e) {
            $exception = new GoogleReviewException($e->getMessage(), 500, $e);
            return $exception->getFallbackReviews();
        }

        return (new GoogleReviewException('Retour api Google place vide !', 204))->getFallbackReviews();
    }
}
