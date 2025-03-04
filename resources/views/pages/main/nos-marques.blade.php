@extends('layouts.app')
@section('title', 'Marques - JD Travaux Services')

@push('styles')
    <style>
        .brands-logo {
            padding: 1rem;
        }
        .card-footer a {
            animation: none;
        }
    </style>
@endpush

@section('content')
    <section>
        <div class="col-10 py-5 mx-auto">
            <h1 class="text-center mb-5 bg-white-soft">Nos Partenaires</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Castes Industrie -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img src="{{ Vite::asset('resources/images/brands/castes-logo.webp') }}" class="img-fluid"
                                 alt="Castes Industrie">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Castes Industrie</strong> est un fabricant français de renom
                                spécialisé dans la
                                conception et la fabrication de fenêtres et portes-fenêtres en bois, PVC et aluminium.
                                Fort d'une expérience de plusieurs décennies, Castes Industrie s'engage à offrir des
                                produits alliant esthétisme, performance énergétique et durabilité. Grâce à un
                                savoir-faire artisanal et des technologies de pointe, chaque produit est conçu pour
                                répondre aux exigences des clients en matière d'isolation thermique et acoustique, tout
                                en respectant les normes environnementales. Castes Industrie se distingue également par
                                son engagement en faveur de l'innovation, en développant des solutions sur mesure
                                adaptées à tous les types de projets, qu'il s'agisse de rénovations ou de constructions
                                neuves.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.castes-industrie.fr" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at"></i> Visiter le site</a>
                        </div>
                    </div>
                </div>

                <!-- AMB -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto"><img
                                src="{{ Vite::asset('resources/images/brands/AMB-logo.webp') }}" class="img-fluid"
                                alt="AMB"></div>
                        <div class="card-body">
                            <p class="card-text"><strong>AMB</strong> est un fabricant français reconnu pour ses
                                moustiquaires et stores
                                de haute qualité. L'entreprise propose une large gamme de solutions innovantes pour
                                protéger les habitations contre les insectes tout en conservant une esthétique élégante.
                                Les produits AMB se caractérisent par leur robustesse, leur facilité d'installation et
                                leur adaptabilité à différents types de fenêtres et portes. Que ce soit pour des
                                moustiquaires enroulables, coulissantes ou fixes, AMB met un point d'honneur à offrir
                                des produits qui répondent aux besoins spécifiques de chaque client. En plus de leur
                                efficacité, les stores AMB sont conçus pour améliorer le confort thermique et visuel des
                                intérieurs, tout en contribuant à l'efficacité énergétique des bâtiments.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.amb-france.com" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at"></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- LAKAL -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto"><img
                                src="{{ Vite::asset('resources/images/brands/lakal-logo.webp') }}"
                                class="img-fluid"
                                alt="LAKAL">
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>LAKAL</strong> est une marque allemande de référence dans le
                                domaine des volets
                                roulants et des portes de garage, qu'ils soient manuels ou électriques. Réputée pour la
                                qualité de ses matériaux et la précision de sa fabrication, LAKAL propose des solutions
                                qui allient sécurité, confort et design moderne. Les volets roulants LAKAL sont conçus
                                pour offrir une excellente isolation thermique et acoustique, tout en garantissant une
                                protection optimale contre les intrusions. Les portes de garage, quant à elles, sont
                                disponibles dans une variété de styles et de configurations, adaptées à tous les
                                besoins, que ce soit pour des habitations privées ou des bâtiments commerciaux. En
                                mettant l'accent sur l'innovation technologique et le respect de l'environnement, LAKAL
                                s'affirme comme un leader dans son secteur.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.lakal.de" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- TECH-PRO -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img
                                src="{{ Vite::asset('resources/images/brands/tech-pro.webp') }}"
                                class="img-fluid bg-secondary p-2"
                                alt="TechPro"
                                title="fabriquant de porte de garage Tech-pro"
                            />
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Tech Pro</strong> est une marque française situé juste à côté
                                de Clermont-Ferrand, Tech Pro est une marque reconnue pour ses portes de garage robustes
                                et esthétiques.
                                Les modèles offrent sécurité, isolation et motorisation avancée pour un confort optimal.
                            </p>
                            <p>🔹 Types de portes :</p>
                            <ul>
                                <li>✔️ Sectionnelles : Isolation renforcée, ouverture verticale</li>
                                <li>✔️ Basculantes : Économiques et fiables</li>
                                <li>✔️ Enroulables : Gain de place maximal</li>
                                <li>✔️ Industrielles : Résistantes et conformes aux normes</li>
                            </ul>
                            <p>
                                🔹 Options : motorisation intelligente, pilotage domotique, large choix de coloris et
                                finitions.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.techpro.fr" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- BELM -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img
                                src="{{ Vite::asset('resources/images/brands/belm.webp') }}"
                                class="img-fluid p-2"
                                alt="TechPro"
                                title="fabriquant de porte de d'entree Bel'm"
                            />
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Bel’M</strong> est un fabricant français reconnu pour ses portes d’entrée en
                                aluminium, bois et
                                acier, alliant sécurité, isolation et design. Grâce à un savoir-faire 100% français, nos
                                portes sont conçues pour offrir durabilité et performance énergétique.
                            </p>
                            <p>🔹 Nos gammes : </p>
                            <ul>
                                <li>✔️ Aluminium : Moderne, robuste, entretien facile</li>
                                <li>✔️ Bois : Chaleureux, écologique, isolant</li>
                                <li>✔️ Acier : Sécurisé, élégant, résistant</li>
                            </ul>
                            <p>🔹 Engagements : Fabrication française, personnalisation totale, qualité premium.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.belm.fr" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- ZILTEN -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img
                                src="{{ Vite::asset('resources/images/brands/zilten.webp') }}"
                                class="img-fluid bg-light p-2"
                                alt="TechPro"
                                title="fabriquant de porte et menuiseries Ziltem"
                            />
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Zilten</strong> est un fabricant français spécialisé dans les portes d’entrée, fenêtres et volets
                                sur mesure. Alliant design, performance thermique et sécurité, nos menuiseries sont
                                conçues pour offrir un confort optimal et une grande durabilité.
                            </p>
                            <p>🔹 Nos produits :</p>
                            <ul>
                                <li>✔️ Portes d’entrée : Aluminium, bois ou mixte, alliant esthétique et isolation</li>
                                <li>✔️ Fenêtres & baies vitrées : Haute performance énergétique et acoustique</li>
                                <li>✔️ Volets roulants & battants : Motorisation et domotique intégrées</li>
                            </ul>
                            <p>🔹 Engagements : Fabrication 100% française, matériaux de qualité, personnalisation
                                complète.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.zilten.com" class="btn button service-button" target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- LA TOULOUSAINE -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img
                                src="{{ Vite::asset('resources/images/brands/toulousaine.webp') }}"
                                class="img-fluid bg-light"
                                alt="TechPro"
                                title="fabriquant menuiseries La Toulousaine"
                            />
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>La Toulousaine</strong> est un fabricant français reconnu pour ses portes de garage, portails,
                                volets et rideaux métalliques. Avec plus de 60 ans d’expertise, nous offrons des
                                solutions robustes, esthétiques et innovantes, adaptées aux besoins des particuliers et
                                des professionnels.
                            </p>
                            <p>🔹 Nos produits : </p>
                            <ul>
                                <li>✔️ Portes de garage : Sectionnelles, enroulables, battantes</li>
                                <li>✔️ Portails & clôtures : Aluminium, motorisation domotique</li>
                                <li>✔️ Volets roulants & brise-soleil : Sécurité et isolation optimales</li>
                            </ul>
                            <p>🔹 Engagements : Fabrication 100% française, durabilité, sécurité renforcée.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.la-toulousaine.com/fr" class="btn button service-button"
                               target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
                <!-- SOMIA -->
                <div class="col">
                    <div class="card h-100">
                        <div class="brands-logo mx-auto">
                            <img
                                src="{{ Vite::asset('resources/images/brands/somia.webp') }}"
                                class="img-fluid"
                                alt="TechPro"
                                title="fabriquant de menuiseries Somia01"
                            />
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Somia est un fabricant français situé dans l'Ain à Miribel, spécialisé dans les
                                menuiseries en PVC, aluminium et bois. Grâce à un savoir-faire local, ils proposent des
                                fenêtres, portes et volets sur mesure, alliant design, performance et durabilité.
                            </p>
                            <p>🔹 Les produits : </p>
                            <ul>
                                <li>✔️ Fenêtres & baies vitrées : Isolation optimale, haute résistance</li>
                                <li>✔️ Portes d’entrée & de garage : Sécurisées et esthétiques</li>
                                <li>✔️ Volets roulants & battants : Motorisation et domotique intégrées</li>
                            </ul>
                            <p> 🔹 Engagements : Fabrication 100% française, qualité premium, large choix de
                                finitions.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://www.somia-menuiseries.com" class="btn button service-button"
                               target="_blank">
                                <i class="fa-solid fa-at "></i> Visiter le site</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
