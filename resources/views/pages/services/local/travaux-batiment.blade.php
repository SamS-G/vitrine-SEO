@extends('layouts.app')

@section('title', "Multiservices en travaux du bâtiment à {$city->name} - JD Travaux Services")
@section('meta_description', "Petits travaux du bâtiment à {$city->name} : menuiserie, rénovation intérieure et extérieure, ajustements et réparations diverses.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Multi-services en travaux du bâtiment à {{ $city->name }}</h1>
        <p class="text-center text-muted">Petits travaux, ajustements & réparations - Professionnalisme & rapidité</p>

        <div class="d-flex justify-content-around">
            <div>
                <h2 class="h3-xl my-4">Nos services de multi-services</h2>
                <ul class="list-group">
                    <li class="list-group-item">Réparations de portes, fenêtres et volets</li>
                    <li class="list-group-item">Pose de plinthes, moulures et ajustements divers</li>
                    <li class="list-group-item">Remplacement de serrures et poignées</li>
                    <li class="list-group-item">Amélioration et isolation thermique et phonique</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3">Obtenir un devis</a>
            </div>
            <img src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/portrait.webp') : Vite::asset('resources/images/portrait.webp')  }}"
                 alt="Multiservices en travaux du bâtiment à {{ $city->name }}" class="img-fluid rounded ratio-2x3">
        </div>
        <div class="mt-3">
            <h2>Nos interventions à {{ $city->name }}</h2>
            <p>Nous intervenons dans les quartiers proches de {{ implode(', ', json_decode($city->landmarks, true)) }}
                .</p>
        </div>
    </div>
@endsection
