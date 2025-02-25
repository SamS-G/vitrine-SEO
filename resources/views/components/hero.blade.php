<div class="container-fluid header-container">
    <img loading="eager" decoding="async" fetchpriority="high"
         src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/redHouse.webp') : Vite::asset('resources/images/home/redHouse.webp') }}"
         alt="Une maison à la porte rouge en pierre"
         width="2494"
         height="1264"
    >
    <h1 class="hero-title text-center">
        Artisan menuisier en Plaine de l'Ain <br/>
        Spécialiste en réparation et pose de volets roulants et moustiquaires, <br/>
        fenêtres, baies, portes et portails près de chez vous.
    </h1>
    @if($ctaButton)
        <x-button
            buttonName="Demander mon devis"
            link="contact"
            linkClass="btn btn-lg cta-button"
            iconClass="fa-regular fa-envelope"
            container="cta-container"
        />
    @endif
</div>

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
            top: 25%; /* Centre verticalement */
            left: 50%; /* Centre horizontalement */
            transform: translate(-50%, -50%); /* Ajuste le centrage */
            color: white; /* Couleur du texte */
            text-align: center;
            font-size: 2rem; /* Ajuste la taille */
            background: rgba(0, 0, 0, 0.5); /* Ajoute un fond semi-transparent */
            padding: 1rem;
            border-radius: 10px;
        }

        body > main > section.hero > div > div > a {
            position: absolute;
            top: 45%; /* Centre verticalement */
            left: 50%; /* Centre horizontalement */
            transform: translate(-50%, -50%); /* Ajuste le centrage */
        }

    </style>
@endpush

