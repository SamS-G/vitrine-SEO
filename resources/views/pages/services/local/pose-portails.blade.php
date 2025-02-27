@extends('layouts.app')

@section('title', "Pose de portails à {$city->name} - JD Travaux Services")
@section('meta_description', "Installation de portails électriques ou manuels à {$city->name}. Choisissez un portail battant ou coulissant adapté à votre habitation.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container pt-5 pb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Pose de portails à {{ $city->name }}</h1>
        <p class="text-center text-muted">Des portails faits pour durer</p>
        <div class="d-flex justify-content-around">
            <div>
                <h2 class="h3-xl my-4">Mes modèles de portails</h2>
                <ul class="list-group">
                    <li class="list-group-item">Portail battant en aluminium ou PVC</li>
                    <li class="list-group-item">Portail coulissant motorisé</li>
                    <li class="list-group-item">Portail manuel ou automatique</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3">Devis personnalisé</a>
                <div class="mt-3">
                    <h2 class="mt-5">Nos interventions à {{ $city->name }}</h2>
                    <p>
                        J'ai interviens dans les quartiers proches de
                        : {{ implode(', ', json_decode($city->landmarks, true)) }}
                        .</p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/portail.webp') : Vite::asset('resources/images/services/local/portail.webp') }}"
                alt="Pose de portails à {{ $city->name }}"
                title="Pose de portails à {{ $city->name }}"
                class="img-fluid rounded mt-3">
        </div>
    </div>
@endsection
