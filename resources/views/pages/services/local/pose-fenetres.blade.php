@extends('layouts.app')
@section('title', $meta_data->meta_title)
@section('meta_description', $meta_data->meta_description)

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Installation de fenêtres à {{ $city->name }}</h1>
        <p class="text-center text-muted">Fenêtres en bois, PVC et aluminium - Isolation optimale & garanties</p>
        <div class="d-flex justify-content-around">
            <div class="col-md-6">
                <h2 class="h3-xl my-4">Pourquoi choisir mes fenêtres ?</h2>
                <ul class="list-group">
                    <li class="list-group-item">Isolation thermique et phonique optimale</li>
                    <li class="list-group-item">Fabrication française & sur-mesure</li>
                    <li class="list-group-item">Matériaux haut de gamme : bois, PVC, aluminium</li>
                    <li class="list-group-item">Pose rapide & garantie 10 ans</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3 cta-button">Demander un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">Nos réalisations près de {{ $city->name }}</h2>
                    <p>J'ai récemment installé des fenêtres près
                        de : {{ implode(', ',(array)json_decode($city->landmarks)) }}
                    .</p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/fenetre.webp') : Vite::asset('resources/images/services/local/fenetre.webp')  }}"
                alt="Pose de fenêtres à {{ $city->name }}"
                title="Pose de fenêtres à {{ $city->name }}"
                class="img-fluid rounded">
        </div>
    </div>
@endsection
