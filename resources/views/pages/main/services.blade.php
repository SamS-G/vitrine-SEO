@extends('layouts.app')
@section('title', 'Services - JdServices')

@push('styles')
    @vite(['resources/css/services.css'])
@endpush

@section('content')
    <div class="col-10 mx-auto my-5">
        <section>
            <h1 class="text-center mb-5 bg-white-soft">Découvrez Nos Services – Expertise & Qualité au Rendez-vous
                !</h1>
            <div class="container pb-5">
                <p>
                    Chez JD Travaux Services, je met mon savoir-faire artisanal au service de vos projets pour
                    améliorer votre habitat. <br/>
                    De la pose de fenêtres, portes et portails, à l’installation de revêtements de sol, en passant par
                    la pose de moustiquaires et les travaux de rénovation du bâtiment, je vous garanti un travail
                    soigné et durable.
                </p>
                <ul>
                    <li> 💡 Un seul interlocuteur du devis à la pose pour un accompagnement personnalisé et une relation
                        de confiance.
                    </li>
                    <li> 📍 Intervention locale & devis gratuit – Parcourez mes services et contactez-moi pour donner
                        vie à vos projets ! 🚀
                    </li>
                </ul>
            </div>
        </section>
        <section class="row">
            @php
                $services = [
                    [
                        'title' => 'Pose de Fenêtres – Isolation & Esthétisme Garanties',
                        'route' => 'services/pose-fenetres',
                        'image' => 'vitre.webp',
                        'text' =>
                        '<p class="card-text text-muted">
                        Améliorez le confort et l’efficacité énergétique de votre maison avec mes <strong>fenêtres en PVC, aluminium ou bois</strong>.
                        <strong>JD Travaux Services</strong> vous assure une pose soignée, alliant <strong>performance thermique, acoustique et design élégant</strong>.
                        </p>
                            <ul class="list-unstyled text-success fw-semibold">
                                <li>✅ Installation sur-mesure</li>
                                <li>✅ Matériaux durables et esthétiques</li>
                                <li>✅ Accompagnement du devis à la pose</li>
                            </ul>
                            '
                    ],
                    [
                        'title' => 'Pose de Moustiquaires – Confort & Protection Toute l’Année',
                        'route' => 'services/pose-moustiquaires',
                        'image' => 'volet-moustiquaire.webp',
                        'text' =>
                            '<p class="card-text text-muted">
                                Protégez votre intérieur des insectes tout en profitant de l’air frais avec mes
                                <strong>moustiquaires sur-mesure</strong>. JD Travaux Services installe des solutions adaptées
                                à vos fenêtres et portes pour un <strong>confort optimal sans compromis sur l’esthétisme</strong>.
                            </p>
                                <ul class="list-unstyled text-success fw-semibold">
                                    <li>✅ Modèles fixes, coulissants ou enroulables</li>
                                    <li>✅ Installation discrète et efficace</li>
                                    <li>✅ Qualité et durabilité garanties</li>
                                </ul>'
                            ],
                    [
                        'title' => 'Pose de Volets Roulants – Confort, Sécurité & Performance',
                        'route' => 'services/pose-volets-roulants',
                        'image' => 'volet.webp', 'text' =>
                           '    <p class="card-text text-muted">
                                   Améliorez l’isolation et la sécurité de votre habitation avec mes
                                   <strong>volets roulants classiques, électriques ou solaires</strong>.
                                   <strong>JD Travaux Services</strong> vous accompagne dans le choix et l’installation de solutions adaptées
                                   à votre logement pour un <strong>confort optimal toute l’année</strong>.
                                </p>
                                <ul class="list-unstyled text-success fw-semibold">
                                    <li>✅ Volets roulants manuels, motorisés ou autonomes (solaires)</li>
                                    <li>✅ Isolation thermique et acoustique renforcée</li>
                                    <li>✅ Pose sur-mesure & matériaux durables</li>
                                </ul>'
                           ],
                    [
                        'title' => 'Pose de Portes d’Entrée – Sécurité, Esthétisme & Isolation',
                        'route' => 'services/pose-portes-entree',
                        'image' => 'porte-entree.webp',
                        'text' =>
                                '<p class="card-text text-muted">
                                    Offrez à votre maison <strong>une porte d’entrée élégante, sécurisée et performante</strong>.
                                    <strong>JD Travaux Services</strong> vous propose la <strong>pose sur-mesure</strong> de portes en
                                    <strong>PVC, aluminium, bois ou mixtes</strong>, alliant <strong>design moderne, isolation thermique et résistance renforcée</strong>.
                                </p>
                                <ul class="list-unstyled text-success fw-semibold">
                                    <li>✅ Portes blindées, vitrées ou pleines selon vos besoins</li>
                                    <li>✅ Excellente isolation thermique & acoustique</li>
                                    <li>✅ Matériaux durables et résistants aux intempéries</li>
                                </ul>'
                            ],
                    [
                        'title' =>'Pose de portes de garage',
                        'route' => 'services/pose-portes-garage',
                        'image' => 'porte-garage.webp',
                        'text' =>
                                '<p>Optez pour une <strong>porte de garage fiable et esthétique</strong> adaptée à votre maison !
                                    <strong>JD Travaux Services</strong> installe des <strong>portes de garage battantes, sectionnelles, basculantes ou enroulables</strong>,
                                    avec ou sans motorisation, pour un <strong>confort optimal et une sécurité renforcée</strong>.
                                </p>
                                <ul class="list-unstyled text-success fw-semibold">
                                    <li>✅ Portes manuelles ou motorisées pour plus de confort</li>
                                    <li>✅ Isolation thermique et résistance aux intempéries</li>
                                    <li>✅ Pose sur-mesure pour s’adapter à votre espace</li>
                                </ul>'
                             ],
                    [
                        'title' => 'Pose de portails',
                        'route' => 'services/pose-portails',
                        'image' => 'portail.webp',
                        'text' =>
                                '<p class="card-text text-muted">
                                    Améliorez l’accès à votre propriété avec un <strong>portail sur-mesure</strong>, alliant
                                    <strong>sécurité, design et robustesse</strong>. <strong>JD Travaux Services</strong> installe des
                                    <strong>portails battants, coulissants ou motorisés</strong>, en <strong>aluminium, acier ou PVC </strong>,
                                    adaptés à vos besoins et à l’esthétique de votre maison.
                                </p>
                                <ul class="list-unstyled text-success fw-semibold">
                                    <li>✅ Portails manuels ou motorisés pour plus de confort</li>
                                    <li>✅ Matériaux résistants et adaptés aux intempéries</li>
                                    <li>✅ Pose sur-mesure avec finitions personnalisées</li>
                                </ul>'
                         ],
                    [
                        'title' => 'Pose de parquet et revêtements de sol',
                        'route' => 'services/pose-revetements-sol',
                        'image' => 'parquet.webp',
                        'text' =>
                           '<p class="card-text text-muted">
                                Offrez à votre intérieur un <strong>sol élégant, résistant et facile d’entretien</strong> grâce à mes prestations
                                de <strong>pose de parquet, carrelage, lino, vinyle et stratifié</strong>.
                                <strong>JD Travaux Services</strong> vous accompagne dans le choix du matériau idéal et réalise une
                                <strong>installation soignée pour un résultat impeccable et durable</strong>.
                           </p>
                            <ul class="list-unstyled text-success fw-semibold">
                                <li>✅ Parquet massif, contrecollé ou stratifié</li>
                                <li>✅ Revêtements en carrelage, PVC, vinyle ou moquette</li>
                                <li>✅ Pose sur-mesure adaptée à votre intérieur</li>
                            </ul>'
                            ],
                    [
                        'title' => 'Dépannage de volets roulants',
                        'route' => 'services/reparation-volets-roulants',
                        'image' => 'reparation.webp',
                        'text' =>
                           '<p class="card-text text-muted">
                                Un volet roulant bloqué, une motorisation défectueuse ou un mécanisme cassé ?
                                <strong>JD Travaux Services</strong> intervient rapidement pour
                                <strong>réparer vos volets roulants manuels, électriques ou solaires</strong>.
                                Nos experts assurent un <strong>diagnostic précis et une réparation efficace</strong>
                                pour garantir la sécurité et le confort de votre habitation.
                           </p>
                            <ul class="list-unstyled text-success fw-semibold">
                                <li>✅ Réparation de volets roulants manuels, électriques et solaires</li>
                                <li>✅ Intervention rapide et efficace</li>
                                <li>✅ Remplacement de lames, moteur, treuil et accessoires</li>
                            </ul>'
                         ],
                    [
                        'title' => 'Travaux du Bâtiment & Multi-Services – Rénovation & Aménagement sur Mesure',
                        'route' => 'services/travaux-batiment',
                        'image' => 'multi-service.webp',
                        'text' =>
                            '<p class="card-text text-muted">
                                Besoin de rénover, d’aménager ou d’entretenir votre habitation ?
                                <strong>JD Travaux Services</strong> réalise tous types de <strong>travaux du bâtiment</strong>,
                                du <strong>gros œuvre aux finitions</strong>, avec un <strong>savoir-faire artisanal et un accompagnement personnalisé</strong>.
                                Que ce soit pour la <strong>maçonnerie, la peinture, l’isolation ou l’aménagement intérieur</strong>,
                                nous vous garantissons un travail <strong>soigné et durable</strong>.
                            </p>
                            <ul class="list-unstyled text-success fw-semibold">
                                <li>✅ Maçonnerie, rénovation et aménagement intérieur</li>
                                <li>✅ Peinture, isolation et pose de revêtements muraux</li>
                                <li>✅ Un seul interlocuteur du devis à la réalisation des travaux</li>
                            </ul>'
                            ],
                ];
            @endphp
            @foreach ($services as $service)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{  Agent::isMobile() ? Vite::asset("resources/images/responsive/services/{$service['image']}") : Vite::asset("resources/images/services/{$service['image']}") }}"
                                     class="img-fluid rounded-start"
                                     alt="{{ $service['title'] }}"
                                     width="347"
                                     height="323"
                                >
                                <figcaption class="text-muted text-center fs-6">
                                    <small><em>illustration, non disponible à la vente</em></small>
                                </figcaption>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body service-card-body">
                                    <h4 class="card-title text-center">{{ $service['title'] }}</h4>
                                    <div class="card-text service-card-text my-3">{!! strip_tags($service['text'], '<ul>, <li>, <p>') !!}</div>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ url($service['route']) }}" class="btn btn-sm service-button">Découvrir
                                            <i class="fa-solid fa-arrow-right fa-beat"></i>
                                        </a>
                                        <a href="tel:+33689442815" class="btn btn-sm service-button">
                                            <i class="fa-solid fa-phone"></i> Parlons de votre projet !
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="w-auto">
                <p class="alert alert-success">Si vous souhaitez connaître les communes dans lesquelles
                    ces <strong>Services</strong> sont proposés rendez-vous sur cette
                    <a href="{{ url('zone-interventions') }}" class=""><strong>page.</strong></a>
                </p>
            </div>
        </section>
    </div>
@endsection
