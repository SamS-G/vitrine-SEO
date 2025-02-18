@extends('layouts.app')
@section('title', 'Marques - JD Travaux Services')
@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 bg-white-soft">Nos Partenaires</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Castes Industrie -->
            <div class="col">
                <div class="card h-100">
                    <div class="brands-logo mx-auto">
                        <img src="{{ Vite::asset('resources/images/brands/castes-logo.webp') }}" class="img-fluid" alt="Castes Industrie">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Castes Industrie</h5>
                        <p class="card-text">Castes Industrie est un fabricant français de renom spécialisé dans la conception et la fabrication de fenêtres et portes-fenêtres en bois, PVC et aluminium. Fort d'une expérience de plusieurs décennies, Castes Industrie s'engage à offrir des produits alliant esthétisme, performance énergétique et durabilité. Grâce à un savoir-faire artisanal et des technologies de pointe, chaque produit est conçu pour répondre aux exigences des clients en matière d'isolation thermique et acoustique, tout en respectant les normes environnementales. Castes Industrie se distingue également par son engagement en faveur de l'innovation, en développant des solutions sur mesure adaptées à tous les types de projets, qu'il s'agisse de rénovations ou de constructions neuves.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="https://www.castes-industrie.fr" class="btn button" target="_blank">Visiter le site</a>
                    </div>
                </div>
            </div>

            <!-- AMB -->
            <div class="col">
                <div class="card h-100">
                    <div class="brands-logo mx-auto"><img src="{{ Vite::asset('resources/images/brands/AMB-logo.webp') }}" class="img-fluid" alt="AMB"></div>
                    <div class="card-body">
                        <h5 class="card-title">AMB</h5>
                        <p class="card-text">AMB est un fabricant français reconnu pour ses moustiquaires et stores de haute qualité. L'entreprise propose une large gamme de solutions innovantes pour protéger les habitations contre les insectes tout en conservant une esthétique élégante. Les produits AMB se caractérisent par leur robustesse, leur facilité d'installation et leur adaptabilité à différents types de fenêtres et portes. Que ce soit pour des moustiquaires enroulables, coulissantes ou fixes, AMB met un point d'honneur à offrir des produits qui répondent aux besoins spécifiques de chaque client. En plus de leur efficacité, les stores AMB sont conçus pour améliorer le confort thermique et visuel des intérieurs, tout en contribuant à l'efficacité énergétique des bâtiments.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="https://www.amb-france.com" class="btn button" target="_blank">Visiter le site</a>
                    </div>
                </div>
            </div>

            <!-- LAKAL -->
            <div class="col">
                <div class="card h-100">
                    <div class="brands-logo mx-auto"><img src="{{ Vite::asset('resources/images/brands/lakal-logo.webp') }}" class="img-fluid" alt="LAKAL"></div>
                    <div class="card-body">
                        <h5 class="card-title">LAKAL</h5>
                        <p class="card-text">LAKAL est une marque allemande de référence dans le domaine des volets roulants et des portes de garage, qu'ils soient manuels ou électriques. Réputée pour la qualité de ses matériaux et la précision de sa fabrication, LAKAL propose des solutions qui allient sécurité, confort et design moderne. Les volets roulants LAKAL sont conçus pour offrir une excellente isolation thermique et acoustique, tout en garantissant une protection optimale contre les intrusions. Les portes de garage, quant à elles, sont disponibles dans une variété de styles et de configurations, adaptées à tous les besoins, que ce soit pour des habitations privées ou des bâtiments commerciaux. En mettant l'accent sur l'innovation technologique et le respect de l'environnement, LAKAL s'affirme comme un leader dans son secteur.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="https://www.lakal.de" class="btn button" target="_blank">Visiter le site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .brands-logo {
            padding: 1rem;
        }
        .card-footer a{
            animation: none;
        }
    </style>
@endpush
