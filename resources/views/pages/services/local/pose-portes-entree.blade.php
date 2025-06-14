@extends('layouts.app')

@section('title', "Pose de portes à {$city->name} - JD Travaux Services")
@section('meta_description', $meta_data->meta_description)
@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Installation de portes à {{ $city->name }}</h1>
        <p class="text-center text-muted">Sécurité, isolation & design - Portes sur-mesure</p>
        <div class="d-flex justify-content-around">
            <div class="col-md-6">
                <h2 class="h3-xl my-4">Mes types de portes</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Portes d'entrée blindées et sécurisées</li>
                    <li class="list-group-item">✅ Portes intérieures design et modernes</li>
                    <li class="list-group-item">✅ Portes de garage sectionnelles et basculantes</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3 cta-button">Obtenir un devis gratuit</a>
                <div class="mt-3">
                    <h2 class="mt-5">Mes interventions à {{ $city->name }}</h2>
                    <p>
                        J'interviens dans les quartiers proches de :
                        {{ implode(', ', json_decode($city->landmarks, true)) }}
                    .</p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/porte.webp') : Vite::asset('resources/images/services/local/porte.webp')  }}"
                alt="Pose de portes à {{ $city->name }}"
                class="img-fluid rounded">
        </div>
    </div>
@endsection
