@extends('layouts.app')
@section('title', 'Accueil - JdServices')

@section('content')
    <x-hero
        ctaButton="true"
    />
    <div class="separator-right"></div>
    <section class="section-wrapper">
        <div class="section-title">
            <h3 class="h1">Services</h3>
            <h4>Menuiserie, Dépannage, Multi-Services</h4>
            <i class="fa-solid fa-screwdriver-wrench"></i>
        </div>
        <div class="card-group">
            <x-card
                title="Baies et Fenêtres"
                text="Une large gamme de menuiseries bois ou PVC"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Portes et Portails"
                text="Portail coulissant ou battant, portes de garage sectionnelles"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Volets et Moustiquaires"
                text="Volets roulants électriques, solaires"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
            <x-card
                title="Dépannages"
                text="Dépannage sur volets roulants PVC ou aluminium"
                iconClass="fa-solid fa-plus"
                link="#"
                linkClass="btn btn-sm button"
                buttonName="d'infos"
            />
        </div>
    </section>
    <div class="separator-left"></div>
@endsection
{{--TODO / Section pk me choisir ? / footer / bottom banner--}}
