@extends('layouts.app')
@section('title', 'Accueil - JD Travaux Services')

@push('styles')
    @vite(['resources/css/accueil.css'])
@endpush

@section('content')
    <section class="hero">
        <x-hero ctaButton="true"/>
    </section>
    <div class="separator-right"></div>
    <div class="separator-left"></div>
    {{-- Services --}}
    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1-xl"><span>S</span>ervices</h3>
            <h4 class="h5">Menuiserie, Dépannages, Multi-Services</h4>
        </div>
        <div class="card-group">
            <x-card
                title="Fenêtres et Baies"
                text="Une large gamme de menuiseries bois, alu ou PVC"
                iconClass="fa-solid fa-plus"
                link='services/pose-fenetres'
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/large-bay-windows.webp') : Vite::asset('resources/images/home/services/large-bay-windows.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Portes"
                text="Portes d'entrée, d'intérieur"
                iconClass="fa-solid fa-plus"
                link="services/pose-portes-entree"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/porte-entree.webp') : Vite::asset('resources/images/home/services/porte-entree.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Portes de garage"
                text="Portes de garage sectionnelles, basculantes, enroulables"
                iconClass="fa-solid fa-plus"
                link="services/pose-portes-garage"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/porte-garage.webp') : Vite::asset('resources/images/home/services/porte-garage.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Portails"
                text="Portail coulissant ou battant"
                iconClass="fa-solid fa-plus"
                link="services/pose-portails"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/portail.webp') : Vite::asset('resources/images/home/services/portail.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
        </div>
        <div class="card-group">
            <x-card
                title="Volets"
                text="Volets roulants électriques, solaires"
                iconClass="fa-solid fa-plus"
                link="services/pose-volets-roulants"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/volets-roulants.webp') : Vite::asset('resources/images/home/services/volets-roulants.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Moustiquaires"
                text="Moustiquaires, enroulées, plissées, fixe"
                iconClass="fa-solid fa-plus"
                link="services/pose-moustiquaires"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/volet-moustiquaire.webp') : Vite::asset('resources/images/home/services/volet-moustiquaire.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Dépannage volets"
                text="Dépannage sur volets roulants PVC ou aluminium"
                iconClass="fa-solid fa-plus"
                link="services/reparation-volets-roulants"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/reparation-volet.webp') : Vite::asset('resources/images/home/services/reparation-volet.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
            <x-card
                title="Multi-services"
                text="Travaux du bâtiment"
                iconClass="fa-solid fa-plus"
                link="services/travaux-batiment"
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/services/pose-parquet.webp') : Vite::asset('resources/images/home/services/pose-parquet.webp') }}"
                imgClass=""
                linkClass="btn btn-sm button"
                buttonName="d'infos"
                figcaption="illustration, non disponible à la vente"
                width="604"
                height="334"
            />
        </div>
    </section>

    <div class="separator-right"></div>
    <div class="separator-left"></div>
    {{-- Choose me--}}
    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1-xl"><span>P</span>ourquoi choisir <span>JD</span> Travaux Services ?</h3>
            <h4 class="h5-xl">Votre Artisan de Confiance pour Tous Vos Travaux de Pose et Rénovation</h4>
        </div>
        <div class="container">
            <p>
                Lorsqu’il s’agit d’améliorer votre habitat, faire appel à un artisan qualifié et de confiance est
                essentiel. Chez JD Travaux Services, nous vous garantissons un accompagnement sur-mesure du début à la
                fin de votre projet. <br/>
                Que ce soit pour la pose de fenêtres, de portes d’entrée, de portails, de revêtements de sol, de
                moustiquaires ou encore des travaux de rénovation du bâtiment, nous mettons notre savoir-faire artisanal
                et notre engagement client au cœur de chaque intervention.
            </p>
            <h3>Un Seul Interlocuteur du Devis à la Pose – Un Service 100% Personnalisé</h3>
            <p>Contrairement aux grandes enseignes où les interlocuteurs se multiplient, JD Travaux Services vous assure
                un suivi unique et personnalisé.</p>
            <ul>
                <li>✅ Un artisan dédié qui connaît chaque détail de votre projet.</li>
                <li>✅ Une relation de proximité qui facilite la communication et vous assure une entière satisfaction.
                </li>
                <li>✅ Un engagement qualité, de la sélection des matériaux à la finition parfaite.</li>
            </ul>

            <div class="cta-container mt-4">
                <a href="{{ route('contact') }}" class="btn btn-md cta-button text-uppercase">
                    <i class="fa-regular fa-envelope"></i> Demander mon devis
                </a>
            </div>

        </div>
    </section>

    <div class="separator-left"></div>
    <div class="separator-right"></div>
    {{-- Reviews --}}
    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1-xl"><span>C</span>e qu'en disent nos <span>C</span>lients</h3>
            <h4 class="h5-xl">Nos avis</h4>
        </div>
        <x-reviews-carousel
            :reviews="$reviews"
        />
    </section>

    <div class="separator-right"></div>
    <div class="separator-left"></div>
    {{-- Bottom banner--}}
    <section class="banner-bottom">
        @include('components.bottomBanner')
    </section>
    <div class="separator-left"></div>
    <div class="separator-right"></div>

@endsection
