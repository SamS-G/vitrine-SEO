@push('styles')
    <style>
        .header-container {
            position: relative; /* Nécessaire pour positionner le H1 en absolu */
            width: 100%;
            display: flex; /* Active le mode flexbox pour le conteneur */
            flex-direction: column; /* Définit la direction des éléments (verticale) */
            padding: 0;
        }

        .header-container img {
            width: 100%;
            height: auto; /* Conserve le ratio */
            display: block; /* Évite l'espace sous l'image */
        }

        .hero-title {
            position: absolute;
            top: 35%; /* Centre verticalement */
            left: 50%; /* Centre horizontalement */
            transform: translate(-50%, -50%); /* Ajuste le centrage */
            color: white;
            background: rgba(0, 0, 0, 0.5); /* Ajoute un fond semi-transparent */
            padding: 1rem;
            border-radius: 10px;
        }

        .hero-text {
            position: absolute;
            top: 48%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 1rem 0;
            border-radius: 10px;
        }

        .hero-text p {
            margin-bottom: 0;
            font-size: 1.5rem;
        }

        body > main > section.hero > div > div > a {
            position: absolute;
            top: 45%; /* Centre verticalement */
            left: 50%; /* Centre horizontalement */
            transform: translate(-50%, -50%); /* Ajuste le centrage */
        }

    </style>
@endpush

<div class="container-fluid header-container">
    <img loading="eager" decoding="async" fetchpriority="high"
         src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/redHouse.webp') : Vite::asset('resources/images/home/redHouse.webp') }}"
         alt="Une maison à la porte rouge en pierre"
         width="2500"
         height="1095"
    >
    <h1 class="hero-title text-center">
        Artisan Menuisier en Plaine de l'Ain et sur la Côtière <br/>Pose et Dépannage
    </h1>
    <div class="container hero-text">
        <p class="text-center">Spécialiste de la menuiserie extérieure, j'interviens pour la pose, la
            réparation et le remplacement de fenêtres, portes et volets roulants. <br>
            Faites appel à un expert local pour des menuiseries sur-mesure et un service de qualité.
        </p>
    </div>

    @if($ctaButton)
        <x-button
            buttonName="Demander un devis"
            link="contact"
            linkClass="btn cta-button"
            iconClass="fa-regular fa-envelope"
            container="cta-container"
        />
    @endif
</div>




