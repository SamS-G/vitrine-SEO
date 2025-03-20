@extends('layouts.app')
@section('title', $meta_data->meta_title)
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
        <h1 class="text-center bg-white-soft mb-xl-5">Installation de portes de garage à {{ $city->name }}</h1>
        <p class="text-center text-muted">Sécurité, isolation & praticité - Des portes adaptées à votre habitation</p>
        <div class="d-flex justify-content-around">
            <div class="col-md-6">
                <h2 class="h3-xl my-4">Pourquoi choisir mes fenêtres ?</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Portes sectionnelles : Idéales pour optimiser l’espace, elles offrent
                        une excellente isolation thermique et phonique.
                    </li>
                    <li class="list-group-item">✅ Portes basculantes : Simples et économiques, elles s’adaptent
                        parfaitement aux petits budgets.
                    </li>
                    <li class="list-group-item">✅ Portes enroulables : Un gain de place optimal avec un système discret
                        et motorisable.
                    </li>
                    <li class="list-group-item">✅ Portes battantes : Une solution classique et robuste pour un accès
                        pratique.
                    </li>
                    <li class="list-group-item">✅ Portes motorisées : Pour un confort absolu, ouvrez et fermez votre
                        garage d’un simple geste.
                    </li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3 cta-button">Demander un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">J'interviens à {{ $city->name }}</h2>
                    <p>J'installe vos portes de garage sur-mesure dans tous les quartiers de {{ $city->name }},
                        notamment près de :{{ implode(', ',(array)json_decode($city->landmarks)) }}
                    .</p>
                </div>
            </div>
            <img src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/porte-garage.webp') : Vite::asset('resources/images/services/local/porte-garage.webp')  }}"
                 alt="Pose de portes de garage à {{ $city->name }}"
                 title="Pose de portes de garage à {{ $city->name }}"
                 class="img-fluid rounded">
        </div>
    </div>
@endsection
