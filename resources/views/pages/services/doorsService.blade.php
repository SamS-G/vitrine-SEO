@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">Pose de Fenêtres</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/services/fenetres.webp') }}" class="img-fluid rounded" alt="Pose de fenêtres">
            </div>
            <div class="col-md-6">
                <p>
                    Spécialiste en installation de fenêtres en PVC, bois et aluminium, nous assurons un travail de qualité
                    avec une finition impeccable. Profitez de notre expertise pour améliorer l'isolation et l'esthétique de votre habitat.
                </p>
                <h3>Nos prestations :</h3>
                <ul>
                    <li>Pose de fenêtres en rénovation</li>
                    <li>Installation de fenêtres sur mesure</li>
                    <li>Remplacement de fenêtres anciennes</li>
                    <li>Conseil en isolation thermique</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
@endsection

{{--TODO pose et remplacement avec galerie avant/après, les avantages, bouton Demander devis--}}
