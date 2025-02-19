@extends('layouts.app')
@vite(['resources/css/leaflet.css', 'resources/js/leaflet.js', 'resources/js/area-business-map.js'])
@section('title', 'Zone Géographique - JD Travaux Services')
@section('content')

    <div class="col-10 mx-auto py-5">
        <h1 class="text-center mb-4 bg-white-soft">Nos Services de Menuiserie et Dépannage dans la Plaine de l'Ain</h1>
        <p class="text-justify mb-5">
            <strong><em>JD Travaux Services</em></strong> intervient dans les communes de la <em>Plaine de l'Ain</em>,
            notamment dans les communes
            <strong><em>
                    <a href="https://ville-amberieuenbugey.fr" rel="nofollow">d'Ambérieux-en-Bugey,</a>
                    <a href="https://lagnieu.fr" rel="nofollow">Lagnieu</a>
                    <a href="https://ville-meximieux.fr" rel="nofollow">Meximieux</a>
                    <a href="https://www.ville-dagneux.fr" rel="nofollow">Dagneux</a>
                    <a href="https://leymen.fr" rel="nofollow">Leyment</a>
                    <a href="https://www.beynost.fr" rel="nofollow">Beynost</a>
                    <a href="https://www.miribel.fr" rel="nofollow">Mirible</a>
                    <a href="https://www.ville-montluel.fr" rel="nofollow">Montluel</a>
                    <a href="https://www.tramoyes.fr" rel="nofollow">Tramoyes</a>
                    <a href="https://perouges.fr" rel="nofollow">Pérouges</a>
                    <a href="https://www.mairie-charnoz.fr/accueil/" rel="nofollow">Charnoz</a>
                    <a href="https://www.saintejulie.fr" rel="nofollow">Sainte-Julie</a>
                    <a href="https://www.chazey-sur-ain.fr" rel="nofollow">Chazey-sur-Ain</a>
                    <a href="https://www.mairievlm.fr" rel="nofollow">Villieu-Loyes-Mollon</a>
                    <a href="https://www.labalmelesgrottes.com" rel="nofollow">La-Balme-Les-Grottes.</a>
                </em></strong><br/>
            Nous proposons des solutions sur-mesure pour la pose de fenêtres, portes, et volets dans toute la
            région.
        </p>
        <div class="col-8 mx-auto">
            <p class="alert alert-primary talert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Sous la carte représentant le zone dans laquelle <strong>JD Multi-Services</strong> intervient, cliquez
                sur
                votre commune
                pour découvrir nos services spécifiques.
            </p>
        </div>
        <div id="map" class="container"></div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-5">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/amberieux.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés à Ambérieu-en-Bugey">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Ambérieux-en-Bugey</u></h5>
                        <p class="card-text">Découvrez nos services de pose de fenêtres, portes et volets sur-mesure à
                            Ambérieux-en-Bugey.
                        </p>
                        <a href="{{ url('/prestations-amberieu-en-bugey') }}" role="button" class="btn mx-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/meximieux.webp') }}"
                             class="card-img-top bg-secondary"
                             alt="Fenêtres, portes, volet posés et installés à Meximieux">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Meximieux</u></h5>
                        <p class="card-text">Installation de fenêtres et volets roulants à Meximieux, avec des matériaux
                            de qualité.</p>
                        <a href="{{ url('/prestations-meximieux') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/lagnieux.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Lagnieu">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Lagnieu</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-lagnieu') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/dagneux.webp') }}" class="card-img-top w-75"
                             alt="Fenêtres, portes, volet posés et installés à Dagneux">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Dagneux</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-dagneux') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/leyment.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Leyment">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Leyment</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-leyment') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/beynost.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Beynost">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Beynost</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-beynost') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/miribel.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Miribel">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Miribel</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-miribel') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/montluel.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Montluel">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Montluel</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-montluel') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/tramoyes.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Tramoyes">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Tramoyes</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-tramoyes') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/perouges.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Perouges">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Pérouges</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-perouges') }}" role="button" class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/charnoz.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Charnoz-sur-Ain">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Charnoz-sur-Ain</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-charnoz-sur-Ain') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/sainte-julie.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Sainte-Julie">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Sainte-Julie</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-sainte-julie') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/chazey-sur-ain.webp') }}" class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Chazey-sur-Ain">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Chazey-sur-Ain</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-chazey-sur-Ain') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/villieu-loyes-mollon.webp') }}"
                             class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Villieu-Loyes-Mollon">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Vilieu-Loyes-Mollon</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-vilieu-loyes-mollon') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/cities/les-grottes-la-balme.webp') }}"
                             class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés aux Grottes-la-Balme">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Les-Grottes-la-Balme</u></h5>
                        <p class="card-text">Pose de portes d'entrée modernes et sécurisées à Lagnieu et ses
                            environs.</p>
                        <a href="{{ url('/prestations-la-balme-les-grottes') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir
                            les services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
