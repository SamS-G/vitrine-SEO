@extends('layouts.app')

@section('title', $meta_title)
@section('meta_description', $meta_description)
{{-- Meta générique + meta spécifique à la page local --}}
@section('content')
    <div class="col-6 mx-auto py-5">
        <h1 class="text-center mb-4 services-title">Pose de {{ $type }} à {{ $city['name'] }}</h1>
        <p>JD Travaux Services intervient à {{ $city['name'] }} pour la pose de {{ $type }} en bois, PVC, ou autre.
            Nos services sont adaptés à vos besoins avec des matériaux de qualité.<br/> Contactez-nous pour un devis
            gratuit.
        </p>
        <div class="my-4">
            <h2>Nos services à {{ $city['name'] }}</h2>
            <ul>
                <li>{{ $services['fenêtres']['service-1'] . $city['place-1'] }}</li>
                <li>{{ $services['fenêtres']['service-2'] . $city['place-2'] }}</li>
                <li>{{ $services['fenêtres']['service-3'] . $city['place-3'] }}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h3>Pourquoi choisir JD Travaux Services à {{ $city['name'] }} ?</h3>
            <p>Avec plus de 5 ans d’expérience, nous garantissons des prestations de qualité, adaptées aux besoins des
                habitants à <strong>{{ $city['name'] }}.</strong> <br/>
                De <strong>{{ $city['place-1'] }}</strong> aux quartiers résidentiels proches de
                <strong>{{ $city['place-2'] }}</strong> en passant par <strong>{{ $city['place-3'] }}</strong>, nous
                sommes à votre service !
            </p>
        </div>
        <h3 class="mb-4">Contactez-nous !</h3>
        <a href="{{ route('contact') }}" class="btn button">Demander un devis gratuit</a>
    </div>
@endsection
