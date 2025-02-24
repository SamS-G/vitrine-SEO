@extends('layouts.app')

@section('title', "Dépannage de volets roulants à {$city->name} - JD Travaux Services")
@section('meta_description', "Intervention rapide pour le dépannage et la réparation de volets roulants à {$city->name}. Remplacement de pièces, réparation motorisation et réglage.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center bg-white-soft mb-xl-5">Dépannage de volets roulants à {{ $city->name }}</h1>
        <p class="text-center text-muted">Intervention rapide - Remplacement de pièces - Réparation motorisation</p>

        <div class="d-flex justify-content-around">
            <div>
                <h2>Nos prestations de réparation</h2>
                <ul>
                    <li>Réparation de volets roulants électriques et manuels</li>
                    <li>Remplacement de moteur et de lames endommagées</li>
                    <li>Réglage des fins de course et ajustement des volets</li>
                    <li>Intervention en urgence sous 48h</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn button mt-3">Demander une intervention</a>
            </div>

            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/depannage.webp') : Vite::asset('resources/images/services/local/depannage.webp') }}"
                alt="Dépannage de volets roulants à {{ $city->name }}" class="img-fluid rounded ratio-2x3">
        </div>
        <div class="mt-3">
            <h2 class="mt-5">Zones d’intervention à {{ $city->name }}</h2>
            <p>Nous intervenons près de {{ implode(', ', json_decode($city->landmarks, true)) }}.</p>
        </div>
    </div>
@endsection
