@extends('layouts.app')

@push('styles')
    @vite(['resources/css/zone-intervention.css'])
@endpush

@push('scripts')
    @vite(['resources/js/leaflet.js', 'resources/js/area-business-map.js'])
@endpush

@section('title', 'Zone Géographique - JD Travaux Services')
@section('content')
    <div class="col-10 mx-auto py-5">
        <h1 class="text-center mb-4 bg-white-soft">Mes Services de Menuiserie et Dépannage dans la Plaine de l'Ain</h1>
        <p class="text-justify mb-5">
            <strong><em>JD Travaux Services</em></strong> intervient dans les communes de la <em>Plaine de l'Ain</em>,
            notamment dans les communes
            <strong><em>
                    <a href="https://ville-amberieuenbugey.fr" rel="nofollow">d'Ambérieux-en-Bugey, </a>
                    <a href="https://lagnieu.fr" rel="nofollow">Lagnieu, </a>
                    <a href="https://ville-meximieux.fr" rel="nofollow">Meximieux, </a>
                    <a href="https://www.ville-dagneux.fr" rel="nofollow">Dagneux, </a>
                    <a href="https://leymen.fr" rel="nofollow">Leyment, </a>
                    <a href="https://www.beynost.fr" rel="nofollow">Beynost, </a>
                    <a href="https://www.miribel.fr" rel="nofollow">Mirible, </a>
                    <a href="https://www.ville-montluel.fr" rel="nofollow">Montluel, </a>
                    <a href="https://www.tramoyes.fr" rel="nofollow">Tramoyes, </a>
                    <a href="https://perouges.fr" rel="nofollow">Pérouges, </a>
                    <a href="https://www.mairie-charnoz.fr/accueil/" rel="nofollow">Charnoz, </a>
                    <a href="https://www.saintejulie.fr" rel="nofollow">Sainte-Julie, </a>
                    <a href="https://www.chazey-sur-ain.fr" rel="nofollow">Chazey-sur-Ain, </a>
                    <a href="https://www.mairievlm.fr" rel="nofollow">Villieu-Loyes-Mollon, </a>
                    <a href="https://www.labalmelesgrottes.com" rel="nofollow">La-Balme-Les-Grottes, </a>
                    <a href="https://commune-loyettes.fr" rel="nofollow">Loyettes, </a>
                    <a href="https://saintandredecorcy.fr" rel="nofollow">Saint-André-de-Corcy, </a>
                    <a href="https://www.villars-les-dombes.fr" rel="nofollow">Villars-les-Dombes, </a>
                    <a href="https://saint-vulbas.fr" rel="nofollow">Saint-Vulbas.</a>
                </em></strong><br/>
            Je propose des solutions sur-mesure pour la pose de fenêtres, portes, et volets dans toute la région.
        </p>
        <div class="col-9 mx-auto">
            <p class="alert alert-primary talert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Sous la carte représentant le zone dans laquelle <strong>JD Multi-Services</strong> intervient, cliquez
                sur votre commune pour découvrir mes services spécifiques.
            </p>
        </div>
        <div id="map" class="container"></div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-5">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/amberieux.webp')
                            : Vite::asset('resources/images/cities/amberieux.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés à Ambérieu-en-Bugey"
                            title="Fenêtres, portes, volet posés à Ambérieu-en-Bugey"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Ambérieux-en-Bugey</u></h5>

                        <p class="card-text">Découvrez toutes mes prestations de menuiserie et travaux du bâtiment à
                            <em>Ambérieux-en-Bugey</em> : pose de fenêtres, installation de portes d’entrée et de
                            garage, réparation de volets roulants et bien plus encore.
                            Profitez de solutions sur-mesure pour vos aménagements intérieurs et extérieurs.
                        </p>
                        <a href="{{ url('/prestations-amberieu-en-bugey') }}"
                           role="button"
                           class="btn mx-auto button">Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/meximieux.webp')
                            : Vite::asset('resources/images/cities/meximieux.webp') }}"
                            class="card-img-top bg-secondary"
                            alt="Fenêtres, portes, volet posés et installés à Meximieux"
                            title="Fenêtres, portes, volet posés et installés à Meximieux"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Meximieux</u></h5>
                        <p class="card-text">À <em>Meximieux</em>, bénéficiez de mes services spécialisés en menuiserie,
                            installation de fenêtres, pose de portes d’entrée et de garage, ainsi que la réparation de
                            volets roulants. Je réalise également divers travaux du bâtiment et aménagements
                            intérieurs pour un habitat confortable et performant.
                        </p>
                        <a href="{{ url('/prestations-meximieux') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/lagnieux.webp')
                            : Vite::asset('resources/images/cities/lagnieux.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Lagnieu"
                            title="Fenêtres, portes, volet posés et installés à Lagnieu"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Lagnieu</u></h5>

                        <p class="card-text">Besoin d’un expert en menuiserie et aménagement du bâtiment à
                            <em>Lagnieu ?</em>
                            J'interviens pour la pose de fenêtres, l’installation de portes d’entrée et de garage,
                            la réparation de volets roulants et tous vos travaux d’aménagement intérieur et extérieur.
                            Faites confiance à mon savoir-faire pour des résultats durables et esthétiques.
                        </p>
                        <a href="{{ url('/prestations-lagnieu') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/dagneux.webp')
                            : Vite::asset('resources/images/cities/dagneux.webp') }}"
                            class="card-img-top w-75"
                            alt="Fenêtres, portes, volet posés et installés à Dagneux"
                            title="Fenêtres, portes, volet posés et installés à Dagneux"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Dagneux</u></h5>
                        <p class="card-text">Améliorez votre habitat avec mes prestations en menuiserie et rénovation du
                            bâtiment à <em>Dagneux</em>. Spécialistes de la pose de fenêtres, portes d’entrée, portes de
                            garage et réparation de volets roulants, je vous garanti des installations de qualité
                            et adaptées à vos besoins.
                        </p>
                        <p class="card-text">Retrouvez toutes les prestations réalisables en menuiserie, pose de
                            revêtements de sol dans la commune de <em>Dagneux</em></p>
                        <a href="{{ url('/prestations-dagneux') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/leyment.webp')
                            : Vite::asset('resources/images/cities/leyment.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Leyment"
                            title="Fenêtres, portes, volet posés et installés à Leyment"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Leyment</u></h5>
                        <p class="card-text">Retrouvez mes prestations en menuiserie et travaux de rénovation à
                            <em>Leyment</em> : pose de fenêtres, installation de portes d’entrée et de garage, dépannage
                            et réparation de volets roulants, ainsi que tous types de travaux d’aménagement et
                            d’amélioration de l’habitat. Contactez-moi pour un devis gratuit !
                        </p>
                        <a href="{{ url('/prestations-leyment') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/beynost.webp')
                            : Vite::asset('resources/images/cities/beynost.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Beynost"
                            title="Fenêtres, portes, volet posés et installés à Beynost"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Beynost</u></h5>
                        <p class="card-text">À la recherche d’un professionnel en menuiserie et rénovation à
                            <em>Beynost</em> ?
                            J'assure la pose de fenêtres, l’installation de portes d’entrée et de garage, la
                            réparation de volets roulants et d’autres travaux du bâtiment. Profitez de prestations
                            sur-mesure pour améliorer votre confort et la valeur de votre maison.
                        </p>
                        <a href="{{ url('/prestations-beynost') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/miribel.webp')
                            : Vite::asset('resources/images/cities/miribel.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Miribel"
                            title="Fenêtres, portes, volet posés et installés à Miribel"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Miribel</u></h5>
                        <p class="card-text">À <em>Miribel</em>, je propose :
                            ✔ Pose de fenêtres en PVC, aluminium ou bois
                            ✔ Installation de portes d’entrée et de garage
                            ✔ Réparation et dépannage de volets roulants
                            ✔ Tous travaux de menuiserie et d’aménagement intérieur
                            Faites confiance à mon expertise pour des prestations de qualité adaptées à vos besoins.
                        </p>
                        <a href="{{ url('/prestations-miribel') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/montluel.webp')
                            : Vite::asset('resources/images/cities/montluel.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Montluel"
                            title="Fenêtres, portes, volet posés et installés à Montluel"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Montluel</u></h5>
                        <p class="card-text">Optez pour des prestations de menuiserie et aménagement sur-mesure à
                            <em>Montluel</em> ! Je réalise la pose de fenêtres, l’installation de portes d’entrée et
                            de garage, la réparation de volets roulants et bien plus encore. Offrez à votre habitat des
                            finitions de qualité et un confort optimal.
                        </p>
                        <a href="{{ url('/prestations-montluel') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/tramoyes.webp')
                            : Vite::asset('resources/images/cities/tramoyes.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Tramoyes"
                            title="Fenêtres, portes, volet posés et installés à Tramoyes"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Tramoyes</u></h5>
                        <p class="card-text">Travaux de menuiserie et aménagement à <em>Tramoyes</em> !
                            ✔ Pose de fenêtres et portes (entrée, garage)
                            ✔ Réparation et dépannage de volets roulants
                            ✔ Tous travaux d’aménagement du bâtiment
                            📞 Contactez-moi dès aujourd’hui pour un devis gratuit !
                        </p>
                        <a href="{{ url('/prestations-tramoyes') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/perouges.webp')
                            : Vite::asset('resources/images/cities/perouges.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Perouges"
                            title="Fenêtres, portes, volet posés et installés à Perouges"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Pérouges</u></h5>
                        <p class="card-text">Retrouvez toutes les prestations que je réalise en menuiserie, pose de
                            revêtements de sol dans votre commune de <em>Pérouges</em>.
                        </p>
                        <a href="{{ url('/prestations-perouges') }}" role="button" class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/charnoz.webp')
                            : Vite::asset('resources/images/cities/charnoz.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Charnoz-sur-Ain"
                            title="Fenêtres, portes, volet posés et installés à Charnoz-sur-Ain"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Charnoz-sur-Ain</u></h5>
                        <p class="card-text">Découvrez mes services en menuiserie et rénovation à
                            <em>Charnoz-sur-Ain</em>.
                            Je réalise la pose de fenêtres, l’installation de portes d’entrée et de garage, ainsi
                            que la réparation de volets roulants. Je vous accompagnent pour tous vos travaux du
                            bâtiment, garantissant une finition soignée et durable.
                        </p>
                        <a href="{{ url('/prestations-charnoz-sur-Ain') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/sainte-julie.webp')
                            : Vite::asset('resources/images/cities/sainte-julie.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Sainte-Julie"
                            title="Fenêtres, portes, volet posés et installés à Sainte-Julie"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Sainte-Julie</u></h5>
                        <p class="card-text">Faites appel à un artisan expérimenté à <em>Sainte-Julie</em> pour
                            tous vos projets de menuiserie, pose de fenêtres, installation de portes et réparation de
                            volets roulants. Avec mon savoir-faire, je vous garanti des solutions de qualité
                            adaptées à vos besoins en rénovation et aménagement intérieur.
                        </p>
                        <a href="{{ url('/prestations-sainte-julie') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/chazey-sur-ain.webp')
                            : Vite::asset('resources/images/cities/chazey-sur-ain.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Chazey-sur-Ain"
                            title="Fenêtres, portes, volet posés et installés à Chazey-sur-Ain"
                            width="190"
                            height="70">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Chazey-sur-Ain</u></h5>
                        <p class="card-text">À <em>Chazey-sur-Ain</em>, je propose des services complets en
                            menuiserie et travaux du bâtiment : installation de fenêtres, pose de portes d’entrée et de
                            garage, réparation de volets roulants et autres prestations de rénovation. Profitez d’un
                            accompagnement personnalisé et d’une qualité de travail irréprochable.
                        </p>
                        <a href="{{ url('/prestations-chazey-sur-Ain') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/villieu-loyes-mollon.webp')
                            : Vite::asset('resources/images/cities/villieu-loyes-mollon.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Villieu-Loyes-Mollon"
                            title="Fenêtres, portes, volet posés et installés à Villieu-Loyes-Mollon"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Vilieu-Loyes-Mollon</u></h5>
                        <p class="card-text">Besoin de remplacer vos fenêtres, installer une nouvelle porte d’entrée ou
                            rénover votre garage ? Mon expertise en menuiserie et aménagement du bâtiment à
                            <em>Vilieu-Loyes-Mollon</em> vous accompagnent dans la pose de fenêtres, l’installation de
                            portes et la réparation de volets roulants. Contactez-nous pour une intervention rapide et
                            efficace.
                        </p>
                        <a href="{{ url('/prestations-vilieu-loyes-mollon') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/les-grottes-la-balme.webp')
                            : Vite::asset('resources/images/cities/les-grottes-la-balme.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés aux Grottes-la-Balme"
                            title="Fenêtres, portes, volet posés et installés aux Grottes-la-Balme"
                            width="190"
                            height="70"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Les-Grottes-la-Balme</u></h5>
                        <p class="card-text">>🔹 Vous cherchez un professionnel de confiance à
                            <em>Les-Grottes-la-Balme</em> ?
                            J'assure la pose de fenêtres, l’installation de portes d’entrée et de garage, ainsi que
                            la réparation de volets roulants. Mes prestations s’étendent aussi aux travaux d’aménagement
                            intérieur et de rénovation du bâtiment. Faites appel à moi pour des résultats à la hauteur
                            de vos attentes !
                        </p>
                        <a href="{{ url('/prestations-la-balme-les-grottes') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            {{--            --}}
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/loyettes.webp')
                            : Vite::asset('resources/images/cities/loyettes.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Loyettes"
                            title="Fenêtres, portes, volet posés et installés à Loyettes"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Loyettes</u></h5>
                        <p class="card-text">À <em>Loyettes</em>, je propose un large éventail de services en
                            menuiserie et rénovation du bâtiment :
                        </p>
                        <ul>
                            <li>✔ Installation de fenêtres en PVC, aluminium et bois</li>
                            <li>✔ Pose de portes d’entrée et de garage sur-mesure</li>
                            <li>✔ Réparation et dépannage de volets roulants manuels et motorisés</li>
                            <li> ✔ Tous types de travaux d’aménagement et d’amélioration de l’habitat</li>
                        </ul>
                        <p>
                            🔹 Faites confiance à mon expertise pour des prestations de qualité adaptées à vos besoins.
                        </p>
                        <a href="{{ url('/prestations-loyettes') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/saint-andre.webp')
                            : Vite::asset('resources/images/cities/saint-andre.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Saint-André-de-Corcy"
                            title="Fenêtres, portes, volet posés et installés à Saint-André-de-Corcy"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Saint-André-de-Corcy</u></h5>
                        <p class="card-text">Améliorez le confort et la sécurité de votre habitat avec mes prestations
                            en menuiserie et rénovation à <em>Saint-André-de-Corcy</em>. De la pose de fenêtres et
                            portes à la réparation de volets roulants, je vous offrons des solutions durables et
                            adaptées à vos exigences.
                        </p>
                        <a href="{{ url('/prestations-saint-andre-de-corcy') }}" role="button"
                           class="btn mx-auto mt-auto button">
                            Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img
                            src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/saint-vulbas.webp')
                            : Vite::asset('resources/images/cities/saint-vulbas.webp') }}"
                            class="card-img-top"
                            alt="Fenêtres, portes, volet posés et installés à Saint-Vulbas"
                            title="Fenêtres, portes, volet posés et installés à Saint-Vulbas"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Saint-Vulbas</u></h5>
                        <p class="card-text">Pour des installations de qualité et un service sur-mesure, faites appel à
                            mon expertise en menuiserie et rénovation du bâtiment à <em>Saint-Vulbas</em>.
                            J'assure la pose de fenêtres, l’installation de portes et la réparation de volets
                            roulants, tout en garantissant une finition impeccable et un accompagnement personnalisé.
                        </p>
                        <a href="{{ url('/prestations-saint-vulbas') }}" role="button"
                           class="btn mx-auto mt-auto button">
                           Voir les services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Agent::isMobile()
                            ? Vite::asset('resources/images/responsive/cities/villars-les-dombes.webp')
                            : Vite::asset('resources/images/cities/villars-les-dombes.webp') }}"
                             class="card-img-top"
                             alt="Fenêtres, portes, volet posés et installés à Villars-les-Dombes"
                             title="Fenêtres, portes, volet posés et installés à Villars-les-Dombes"
                        >
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><u>Villars-les-Dombes</u></h5>
                        <p class="card-text">🔹 Besoin d’un artisan fiable à <em>Villars-les-Dombes</em> ?
                            Je vous propose des services en menuiserie, pose de fenêtres, installation de portes
                            d’entrée et de garage, ainsi que la réparation de volets roulants.
                            Contactez-nous dès aujourd’hui pour un devis gratuit et des conseils personnalisés !
                        </p>
                        <a href="{{ url('/prestations-villars-les-dombes') }}" role="button"
                           class="btn mx-auto mt-auto button">Voir les services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
