<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
            'phone' => 'required|string|max:255',
        ], [
            'name.required' => 'Le champ Nom et Prénom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'message.required' => 'Le champ Message est obligatoire.',
            'message.min' => 'Votre message doit contenir au moins 10 caractères.',
            'phone.min' => 'Votre téléphone doit contenir 10 chiffres.',
            'phone.required' => 'Votre numéro de téléphone est requis.',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'content' => $request->message
        ];

        Mail::to(config('app.email_to'))->send(new ContactMail($data));

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}

