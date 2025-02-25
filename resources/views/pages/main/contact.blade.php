@extends('layouts.app')

@section('title', 'Contactez-nous')

@section('content')
    <section>
        <div class="container py-5">
            <h1 class="text-center bg-white-soft">Nous Contacter</h1>
            <p class="text-center text-muted">Une question ? Un projet ? Contactez-nous dès maintenant.</p>

            <!-- Coordonnées + Formulaire (Responsive avec Bootstrap) -->
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h2 class="bg-white-soft fw-bold text-center mb-4">Nos Coordonnées</h2>
                            <p class="mt-3"><strong>📍 Adresse :</strong> 2246 route de la Plaine, Sainte-Julie, 01150,
                                FR
                            </p>
                            <p><strong>📞 Téléphone :</strong> <a href="tel:+33689442815"
                                                                 class="text-decoration-none text-dark">06 89 44 28
                                    15</a>
                            </p>
                            <p><strong>📧 Email :</strong> <a href="mailto:contact@jdtravauxservices.fr"
                                                             class="text-decoration-none text-dark">contact@jdtravauxservices.fr</a>
                            </p>
                            <p><strong>💬 WhatsApp :</strong> <a href="https://wa.me/33689442815" target="_blank"
                                                                class="text-decoration-none text-success">Discuter sur
                                    WhatsApp</a></p>

                            <h3 class="fw-semibold mt-4 bg-white-soft text-center mb-4">Horaires d’ouverture</h3>
                            <ul class="list-unstyled text-muted">
                                <li><strong>🕗 Lundi - Vendredi :</strong> 08:00 - 18:00</li>
                                <li><strong>🕙 Samedi :</strong> 09:00 - 13:00</li>
                                <li><strong>🚫 Dimanche :</strong> Fermé</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Formulaire de Contact -->
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h2 class="fw-bold bg-white-soft text-center">Envoyez-nous un message</h2>
                            <form class="row g-3 needs-validation" action="{{ route('contact.send') }}" method="POST"
                                  novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom et prénom</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">
                                        <i class="fa-solid fa-xmark"></i> Noms manquants
                                    </div>
                                </div>
                                <div class="md-3">
                                    <label for="email" class="form-label">Adresse email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        <i class="fa-solid fa-xmark"></i> Adresse email manquante
                                    </div>
                                </div>
                                <div class="md-3">
                                    <label for="message" class="form-label">Votre message</label>
                                    <textarea rows="10" type="text" class="form-control" id="message" name="message"
                                              required></textarea>
                                    <div class="invalid-feedback">
                                        <i class="fa-solid fa-xmark"></i> Vote message est manquant
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                               required>
                                        <label class="form-check-label" for="invalidCheck">
                                            J'accepte d'être recontacté avec ces coordonnées
                                        </label>
                                        <div class="invalid-feedback">
                                            <i class="fa-solid fa-xmark"></i> Vous n'avez pas accepté les conditions
                                            d'utilisation
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn button" type="submit">✉️ Envoyer le message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Toast pour succès -->
    @if(session('success'))
        <div class="position-fixed top-50 start-50 translate-middle p-3" style="z-index: 1050">
            <div id="toastSuccess" class="toast show align-items-center text-white bg-success border-0" role="alert"
                 aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body text-center">
                        ✅ {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <!-- Toast pour erreurs -->
    @if($errors->any())
        <div class="position-fixed top-50 start-50 translate-middle p-3" style="z-index: 1050">
            <div id="toastError" class="toast show align-items-center text-white bg-danger border-0" role="alert"
                 aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body text-center">
                        <span>❌</span><strong>Erreur :</strong> {{ $errors->first() }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    @push('styles')
        <style>
            span {
                color: black;
            }
        </style>
    @endpush
    @push('scripts')
        <script src="{{ Vite::asset('resources/js/form-validation') }}"></script>
    @endpush

@endsection
