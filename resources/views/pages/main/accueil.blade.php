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
            <h2><span>S</span>ervices</h2>
            <h3>Menuiserie, Dépannages, Multi-Services</h3>
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
            <h2><span>P</span>ourquoi choisir <span>JD</span> Travaux Services ?</h2>
            <h3>Votre Artisan de Confiance pour Tous Vos Travaux de Pose et Rénovation</h3>
        </div>
        <div class="container">
            <p>
                Lorsqu’il s’agit d’améliorer votre habitat, faire appel à un artisan qualifié et de confiance est
                essentiel. Avec JD Travaux Services, je vous garanti un accompagnement sur-mesure du début à la
                fin de votre projet. <br/>
                Que ce soit pour la pose de fenêtres, de portes d’entrée, de portails, de revêtements de sol, de
                moustiquaires ou encore des travaux de rénovation du bâtiment, je met mon savoir-faire artisanal
                et mon engagement client au cœur de chaque intervention.
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
            <h2 class="h1-xl"><span>C</span>e qu'en disent mes <span>C</span>lients</h2>
            <h3 class="h5-xl">Les avis</h3>
        </div>
        <x-reviews-carousel
            :reviews="$reviews"
        />
        <h4 class="text-center mt-5">
            Vous souhaitez laisser un avis ? 🌟🌟🌟🌟🌟
            <a href="https://g.page/r/Cd4ZmtHkK5czEBM/review" target="_blank">
                <strong><span class="text-primary">c'est par ici</span> ➡️</strong>
            </a>
        </h4>
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
