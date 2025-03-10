@extends('layouts.app')

@section('title', "Installation de volets à {$city->name} - JD Travaux Services")
@section('meta_description', $meta_data->meta_description)

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Pose de volets à {{ $city->name }}</h1>
        <p class="text-center text-muted">Matériel et pose de qualité, budget maîtrisé.</p>
        <div class="d-flex justify-content-around">
            <div>
                <h2 class="h3-xl my-4">Mes types de volets</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Volets roulants électriques ou solaires</li>
                    <li class="list-group-item">✅ Volets battants en aluminium, PVC ou bois</li>
                    <li class="list-group-item">✅ Automatisation de volets existants</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn mt-3 button">Obtenir un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">Mes interventions à {{ $city->name }}</h2>
                    <p>
                        J'interviens dans les quartiers proches de
                        : {{ implode(', ', json_decode($city->landmarks, true)) }}
                        .</p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/volet-roulant.webp') : Vite::asset('resources/images/services/local/volet-roulant.webp') }}"
                alt="Pose de volets à {{ $city->name }}"
                title="Pose de volets à {{ $city->name }}"
                class="img-fluid rounded mt-3">
        </div>
    </div>
@endsection
