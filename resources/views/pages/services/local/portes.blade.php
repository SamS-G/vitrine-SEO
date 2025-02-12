@extends('layouts.app')

@section('title', $meta_title)
@section('meta_description', $meta_description)
{{-- Meta générique + meta spécifique à la page local --}}
@section('content')
    <div class="col-6 mx-auto py-5">
        <h1 class="text-center mb-4 services-title">Installation de portes {{ $type }} à {{ $city['name'] }}</h1>
        <p>JD Travaux Services est votre spécialiste à {{ $city['name'] }} pour l'installation de portes {{ $type }}
            en bois, aluminium, PVC ou acier. Que ce soit pour votre garage ou l’entrée de votre maison, nous vous
            proposons
            des solutions sur mesure, alliant sécurité, esthétique et durabilité.<br/> Contactez-nous pour un devis
            personnalisé et gratuit.
        </p>
        <div class="my-4">
            <h2>Nos prestations à {{ $city['name'] }}</h2>
            <ul>
                <li>{{ $services['portes']['service-1'] . $city['place-1'] }}</li>
                <li>{{ $services['portes']['service-2'] . $city['place-2'] }}</li>
                <li>{{ $services['portes']['service-3'] . $city['place-3'] }}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h3>Pourquoi choisir JD Travaux Services à {{ $city['name'] }} ?</h3>
            <p>Forts de plus de 5 ans d’expérience, nous assurons des installations de qualité, adaptées aux exigences
                des habitants de <strong>{{ $city['name'] }}</strong>. <br/>
                De <strong>{{ $city['place-1'] }}</strong> aux quartiers résidentiels proches de
                <strong>{{ $city['place-2'] }}</strong>, en passant par <strong>{{ $city['place-3'] }}</strong>,
                notre équipe est à votre disposition pour un service rapide et fiable !
            </p>
        </div>
        <h3 class="mb-4">Besoin d'une nouvelle porte ?</h3>
        <a href="{{ route('contact') }}" class="btn button">Obtenez votre devis gratuit</a>
    </div>
@endsection
