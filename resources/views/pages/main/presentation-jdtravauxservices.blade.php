@extends('layouts.app')
@section('title', 'Présentation de l\'entreprise JD Travaux Services')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@push('styles')
    <style>
        .card-title.h4.experience-title {
            color: #ca0d00;
            text-shadow: 1px 1px 1px #212529;
        }

        h2 span {
            color: #212C33
        }

        .shadow-sm:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
        }
    </style>

@endpush

@section('content')
    <div class="col-10 py-5 mx-auto">
        <!-- Section de présentation -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center">
                <img
                    src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/portrait.webp') : Vite::asset('resources/images/portrait.webp') }}"
                    alt="Artisan Menuisier Volets Fenetres Portes"
                    class="img-fluid rounded shadow"
                    width="408"
                    height="544"
                >
            </div>
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-center mb-5 bg-white-soft">Votre Expert en Menuiserie</h1>
                <p class="lead">
                    Avec plus de 5 ans d'expérience à
                    <a href="https://laboutiquedumenuisier.fr" target="_blank">La Boutique Du Menuisier</a>,
                    trois maisons rénovées de A à Z en partant de quatres murs et un toit,
                    je mets à votre disposition tout mon savoir-faire pour la pose de portes, fenêtres et volets sur
                    mesure. <br/> Chaque projet est réalisé avec précision et un souci du détail incomparable.
                </p>
                <p class="lead"> Je suis votre seul interlocuteur, <strong>avant, pendant et après</strong>
                    la pose.<br/>
                    Mon objectif est de garantir votre satisfaction en créant une relation de proximité et de confiance,
                    vous offrant des solutions adaptées à vos besoins, alliant esthétique et fonctionnalité.
                </p>
            </div>
        </div>
        <!-- Section d'expérience -->
        <div class="row g-3">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4 experience-title"><span>Q</span>ualité Artisanale</h2>
                        <p class="card-text flex-grow-1">Une expertise confirmée dans la menuiserie pour des
                            réalisations de qualité.</p>
                        <p class="card-text text-muted">+ 5 ans d'expérience</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4 experience-title"><span>S</span>ervice Personnalisé</h2>
                        <p class="card-text flex-grow-1">Un accompagnement sur-mesure, de la conception à la pose
                            finale.</p>
                        <p class="card-text text-muted">Satisfaction garantie</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4 experience-title"><span>I</span>nterlocuteur Unique</h2>
                        <p class="card-text flex-grow-1">Un seul point de contact pour un suivi simplifié et efficace de
                            votre projet.</p>
                        <p class="card-text text-muted">Proximité et réactivité</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

