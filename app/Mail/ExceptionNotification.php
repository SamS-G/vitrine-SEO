<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $errorMessage;
    public string $exceptionDetails;

    public function __construct($message, $exception = null)
    {
        $this->errorMessage = $message; // Renommé pour éviter le conflit
        $this->exceptionDetails = $exception ? $exception->getMessage() : 'Aucune information supplémentaire.';
    }

    public function build()
    {
        return $this->subject('🚨 Alerte : Erreur Google Reviews')
            ->view('emails.exception-notification')
            ->with([
                'errorMessage' => $this->errorMessage,
                'exceptionDetails' => $this->exceptionDetails
            ]);
    }
}

