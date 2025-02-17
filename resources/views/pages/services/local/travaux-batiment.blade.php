@extends('layouts.app')

@section('title', "Multiservices en travaux du bâtiment à {$city->name} - JD Travaux Services")
@section('meta_description', "Petits travaux du bâtiment à {$city->name} : menuiserie, rénovation intérieure et extérieure, ajustements et réparations diverses.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Multi-services en travaux du bâtiment à {{ $city->name }}</h1>
        <p class="text-center text-muted">Petits travaux, ajustements & réparations - Professionnalisme & rapidité</p>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/multiservices.jpg') }}" alt="Multiservices en travaux du bâtiment à {{ $city->name }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Nos services de multi-services</h2>
                <ul>
                    <li>Réparations de portes, fenêtres et volets</li>
                    <li>Pose de plinthes, moulures et ajustements divers</li>
                    <li>Remplacement de serrures et poignées</li>
                    <li>Amélioration et isolation thermique et phonique</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Obtenir un devis</a>
            </div>
        </div>

        <h2 class="mt-5">Nos interventions à {{ $city->name }}</h2>
        <p>Nous intervenons dans les quartiers proches de {{ implode(', ', json_decode($city->landmarks, true)) }}.</p>
    </div>
@endsection
