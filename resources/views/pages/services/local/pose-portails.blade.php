@extends('layouts.app')

@section('title', "Pose de portails à {$city->name} - JD Travaux Services")
@section('meta_description', "Installation de portails électriques ou manuels à {$city->name}. Choisissez un portail battant ou coulissant adapté à votre habitation.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Pose de portails à {{ $city->name }}</h1>

        <h2>Nos modèles de portails</h2>
        <ul>
            <li>Portail battant en aluminium ou PVC</li>
            <li>Portail coulissant motorisé</li>
            <li>Portail manuel ou automatique</li>
        </ul>

        <img src="{{ asset('images/portail.jpg') }}" alt="Pose de portails à {{ $city->name }}" class="img-fluid rounded mt-3">

        <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Devis personnalisé</a>
    </div>
@endsection
