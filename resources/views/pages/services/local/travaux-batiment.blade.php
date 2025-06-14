@extends('layouts.app')

@section('title', "Multiservices en travaux du bâtiment à {$city->name} - JD Travaux Services")
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
        <h1 class="text-center bg-white-soft mb-xl-5">Multi-services en travaux du bâtiment à {{ $city->name }}</h1>
        <p class="text-center text-muted">Petits travaux, ajustements & réparations - Professionnalisme & rapidité</p>

        <div class="d-flex justify-content-around">
            <div>
                <h2 class="h3-xl my-4">Multi-services</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Réparations de portes, fenêtres et volets</li>
                    <li class="list-group-item">✅ Pose de plinthes, moulures et ajustements divers</li>
                    <li class="list-group-item">✅ Remplacement de serrures et poignées</li>
                    <li class="list-group-item">✅ Amélioration et isolation thermique et phonique</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3">Obtenir un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">Mes interventions à {{ $city->name }}</h2>
                    <p>J'interviens dans les quartiers proches de {{ implode(', ', json_decode($city->landmarks, true)) }}
                        .</p>
                </div>
            </div>
            <img src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/portrait.webp') : Vite::asset('resources/images/portrait.webp')  }}"
                 alt="Multi-services en travaux du bâtiment à {{ $city->name }}" class="img-fluid rounded">
        </div>
    </div>
@endsection
