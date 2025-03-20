@extends('layouts.app')
@section('title', 'Services proposés localement - JdServices')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@push('styles')
    @vite(['resources/css/services.css'])
@endpush

@section('content')
    <div class="col-10 mx-auto my-5">
        <section>
            <h1 class="text-center mb-5 bg-white-soft">Découvrez Nos Services – Expertise & Qualité au Rendez-vous
                !</h1>
            <div class="container pb-5">
                <p>
                    Chez JD Travaux Services, je met mon savoir-faire artisanal au service de vos projets pour
                    améliorer votre habitat. <br/>
                    De la pose de fenêtres, portes et portails, à l’installation de revêtements de sol, en passant par
                    la pose de moustiquaires et les travaux de rénovation du bâtiment, je vous garanti un travail
                    soigné et durable.
                </p>
                <ul>
                    <li> 💡 Un seul interlocuteur du devis à la pose pour un accompagnement personnalisé et une relation
                        de confiance.
                    </li>
                    <li> 📍 Intervention locale & devis gratuit – Parcourez mes services et contactez-moi pour donner
                        vie à vos projets ! 🚀
                    </li>
                </ul>
                <p class="text-primary text-center border border-primary"><strong>🔹 Dans chaque rubrique retrouvez les réponses aux questions les plus fréquement posées. </strong></p>
            </div>
        </section>
        <section class="row">
            @foreach ($siteData['services'] as $service)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{  Agent::isMobile()
                                             ? Vite::asset("resources/images/responsive/services/{$service['image']}")
                                             : Vite::asset("resources/images/services/index/{$service['image']}") }}"
                                     class="img-fluid rounded-start"
                                     alt="{{ $service['title'] }}"
                                     width="347"
                                     height="323"
                                >
                                <figcaption class="text-muted text-center fs-6">
                                    <small><em>illustration, non disponible à la vente</em></small>
                                </figcaption>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body service-card-body">
                                    <h4 class="card-title text-center">{{ $service['title'] }}</h4>
                                    <div class="card-text service-card-text my-3">{!! strip_tags($service['text'], '<ul>, <li>, <p>') !!}</div>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ url($service['route']) }}" class="btn btn-sm service-button">Découvrir
                                            <i class="fa-solid fa-arrow-right fa-beat"></i>
                                        </a>
                                        <a href="tel:+33689442815" class="btn btn-sm service-button">
                                            <i class="fa-solid fa-phone"></i> Parlons de votre projet !
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="w-auto">
                <p class="alert alert-success">Si vous souhaitez connaître les communes dans lesquelles
                    ces <strong>Services</strong> sont proposés rendez-vous sur cette
                    <a href="{{ url('zone-interventions') }}" class=""><strong>page.</strong></a>
                </p>
            </div>
        </section>
    </div>
@endsection
