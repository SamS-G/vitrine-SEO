@extends('layouts.app')

@section('title', "Pose de portes à {$city->name} - JD Travaux Services")
@section('meta_description', "JD Travaux Services installe vos portes d'entrée, portes intérieures et portes de garage à {$city->name}. Sécurisez votre habitation avec nos modèles sur-mesure.")

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Installation de portes à {{ $city->name }}</h1>
        <p class="text-center text-muted">Sécurité, isolation & design - Portes sur-mesure</p>

        <div class="row">
            <div class="col-md-6">
                <h2>Nos types de portes</h2>
                <ul>
                    <li>Portes d'entrée blindées et sécurisées</li>
                    <li>Portes intérieures design et modernes</li>
                    <li>Portes de garage sectionnelles et basculantes</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/porte.jpg') }}" alt="Pose de portes à {{ $city->name }}" class="img-fluid rounded">
            </div>
        </div>

        <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Obtenir un devis gratuit</a>
    </div>
@endsection
