@extends('layouts.app')
@section('title', 'Réalisations faites par JD Travaux Services')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@push('styles')
    <style>
        .instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .facebook {
            color: #3b5998;
        }
    </style>
@endpush

@section('content')
    <div class="col-10 mx-auto my-5 text-center">
        <h1 class="mb-4 bg-white-soft">Galerie de Réalisations</h1>
        <h3>Pour suivre et retrouver toutes mes dernières réalisations rendez-vous sur <a
                href="https://www.instagram.com/jdtravaux" target="_blank" class="link-dark"
                aria-label="vers la page Instagram de Jd travaux service">
                <span class="instagram"><i class="fa-brands fa-xl fa-instagram"></i></span></a> et <a
                href="https://www.facebook.com/JDTravauxServices" class="link-dark" target="_blank"
                aria-label="vers la page Facebook de Jd travaux service">
                <span class="facebook"><i class="fa-brands fa-xl fa-square-facebook"></i></span></a>
        </h3>
        <section>
            <x-photo-gallery
                :categories="$siteData['realisations']"
            />
        </section>
    </div>
@endsection
