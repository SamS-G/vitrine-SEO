@extends('layouts.app')
@php
//dd($meta_data->meta_schema)
 @endphp
@section('title', $meta_data->meta_title)
@section('meta_description', $meta_data->meta_description)

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Installation de fenêtres à {{ $city->name }}</h1>
        <p class="text-center text-muted">Fenêtres en bois, PVC et aluminium - Isolation optimale & garanties</p>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/temp/fenetre-simple-alu.jpg') }}" alt="Pose de fenêtres à {{ $city->name }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Pourquoi choisir nos fenêtres ?</h2>
                <ul>
                    <li>Isolation thermique et phonique optimale</li>
                    <li>Fabrication française & sur-mesure</li>
                    <li>Matériaux haut de gamme : bois, PVC, aluminium</li>
                    <li>Pose rapide & garantie 10 ans</li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5">Nos réalisations près de {{ $city->name }}</h2>
        <p>Nous avons récemment installé des fenêtres près de {{ implode(', ',(array)json_decode($city->landmarks)) }}.</p>

        <a href="{{ url('contact') }}" class="btn btn-primary mt-3 cta-button">Demander un devis</a>
    </div>
@endsection
