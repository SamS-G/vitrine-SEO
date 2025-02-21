@extends('layouts.app')

@section('title', "Pose de portes à {$city->name} - JD Travaux Services")
@section('meta_description', "JD Travaux Services installe vos portes d'entrée, portes intérieures et portes de garage à {$city->name}. Sécurisez votre habitation avec nos modèles sur-mesure.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Installation de portes à {{ $city->name }}</h1>
        <p class="text-center text-muted">Sécurité, isolation & design - Portes sur-mesure</p>

        <div class="d-flex justify-content-around">
            <div>
                <h2 class="h3-xl my-4">Nos types de portes</h2>
                <ul class="list-group">
                    <li class="list-group-item">Portes d'entrée blindées et sécurisées</li>
                    <li class="list-group-item">Portes intérieures design et modernes</li>
                    <li class="list-group-item">Portes de garage sectionnelles et basculantes</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3">Obtenir un devis gratuit</a>
            </div>
            <img src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/porte.webp') : Vite::asset('resources/images/services/local/porte.webp')  }}" alt="Pose de portes à {{ $city->name }}"
                 class="img-fluid rounded">
        </div>
        <div class="mt-3">
            <h2>Nos interventions à {{ $city->name }}</h2>
            <p>
                Nous intervenons dans les quartiers proches de
                : {{ implode(', ', json_decode($city->landmarks, true)) }}
                .</p>
        </div>
    </div>
@endsection
