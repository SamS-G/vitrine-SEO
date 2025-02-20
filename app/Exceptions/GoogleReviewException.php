<?php

namespace App\Exceptions;

use App\Mail\ExceptionNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class GoogleReviewException extends Exception
{
    protected array $fallbackReviews;

    public function __construct($message = "Erreur avec Google Reviews", $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        // Définir les avis par défaut à utiliser dans le service
        $this->fallbackReviews = [
            'reviews' => [
                [
                    'authorAttribution' => [
                        'photoUri' => 'https://via.placeholder.com/80',
                        'displayName' => 'Client Satisfait',
                        ],
                    'rating' => 5,
                    'publishTime' => Carbon::now()->toISOString(),
                    'originalText' => ['text' => 'Service impeccable, je recommande vivement !'],
                ],
                [
                    'authorAttribution' => [
                        'photoUri' => 'https://via.placeholder.com/80',
                        'displayName' => 'Utilisateur Vérifié',
                    ],
                    'rating' => 4,
                    'publishTime' => Carbon::now()->toISOString(),
                    'originalText' => ['text' => 'Très bon service, merci encore !'],
                ],
            ]
        ];

        // Log de l'erreur
        Log::error("GoogleReviewException: " . $message, [
            'code' => $code,
            'exception' => $previous?->getMessage() // si pas null renvoi la valeur sinon renvoi null php 8.x
        ]);

        // Envoi d'un email d'alerte
        Mail::to(config('mail.admin_email'))->send(new ExceptionNotification($message, $previous));
    }

    /**
     * Retourne les avis de secours en cas d'erreur API
     */
    public function getFallbackReviews(): array
    {
        return $this->fallbackReviews;
    }
}
