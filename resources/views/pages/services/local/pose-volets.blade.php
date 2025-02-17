@extends('layouts.app')

@section('title', "Installation de volets à {$city->name} - JD Travaux Services")
@section('meta_description', $meta_data->meta_description)

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Pose de volets à {{ $city->name }}</h1>

        <h2>Nos types de volets</h2>
        <ul>
            <li>Volets roulants électriques ou solaires</li>
            <li>Volets battants en aluminium, PVC ou bois</li>
            <li>Automatisation de volets existants</li>
        </ul>

        <img src="{{ asset('images/volet.jpg') }}" alt="Pose de volets à {{ $city->name }}" class="img-fluid rounded mt-3">

        <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Obtenir un devis</a>
    </div>
@endsection
