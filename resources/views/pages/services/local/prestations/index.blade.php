@extends('layouts.app')
@section('title', "Services proposés à $ville - JD Travaux Services")
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <div id="prestations-par-ville" class="container">
        <h1 class="text-center bg-white-soft fw-bold my-5">Nos Prestations à {{ ucfirst($ville) }}</h1>
        <p class="text-muted">
            Vous recherchez un artisan qualifié à <strong>{{ ucfirst($ville) }}</strong> pour vos projets de rénovation
            et
            d’installation ? <br/>
            <strong>JD Travaux Services</strong> vous propose des prestations sur-mesure en <strong>menuiserie,
                revêtements de sol, installation de portes, fenêtres et portails, dépannage de volets roulant et tous
                travaux du bâtiment. </strong>.<br/>
            Profitez d’un savoir-faire artisanal et d’un accompagnement personnalisé pour un travail de qualité.
        </p>

        <div class="row mt-5">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg border-0 text-center">
                        <div class="card-body">
                            <h2 class="card-title text-dark fw-bold h4">{{ $service->name }}</h2>
                            <p class="card-text text-muted">
                                {{ $service->description }}
                            </p>
                            <a href="{{ $service->url }}" class="btn service-button">
                                En savoir <i class="fa-solid fa-plus fa-flip" style="--fa-animation-duration: 5s;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
