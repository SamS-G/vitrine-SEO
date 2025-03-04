@extends('layouts.app')
@section('title', 'Réalisations - JD Travaux Services')

@php
    $categories = [
        'fenetres' => [
            'name' => 'Fenêtres',
            'photos' => [
                [
                    'image' => 'projects-gallery/fenetres/av-ap-fenetre.jpg',
                    'location' => 'Sainte-Julie',
                    'description' => "
    <p>Le client désirait remplacer sa porte de garage par un châssis vitré.</p>
    <p>Après une demande en mairie suite à la modification de la façade et un changement d'utilisation de cette pièce
    nous concevons un châssis suivant les demandes et les impératifs du client et ajoutons un volet roulant.</p>
    <p>Suite à commande la du châssis et du volet chez notre fabricant français nous posons le châssis et le volet.</p>
    <p>Cela donne une nouvelle vie à cette pièce avec un apport important de lumière et une sécurité accrue avec une système de
    fermetures 3 points renforcé par la descente du volet roulant</p>"
    ],
    [
        'image' => 'projects-gallery/fenetres/fenetre-blanche.webp',
        'location' => 'Sainte-Julie',
        'description' => ""
    ],
    [
        'image' => 'projects-gallery/fenetres/fenetre-balcon.webp',
        'location' => 'Sainte-Julie',
        'description' => ""
    ],
    [
        'image' => 'projects-gallery/fenetres/fenetre-ap.webp',
        'location' => 'Sainte-Julie',
        'description' => ""
    ],
            ],
        ],
        'moustiquaire' => [
            'name' => 'Moustiquaire',
            'photos' => [
                [
                    'image' => 'projects-gallery/moustiquaires/moustiquaire.webp', 'location' => 'Sainte-Julie',
                     'description' =>
                     "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                     <ul>
                     <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                     <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                     <li>- pose et conseils d'utilisation</li>
                     </ul>
                    <p>Résultat : le client retrouve des nuits paisibles</p>"
    ],
    [
                    'image' => 'projects-gallery/moustiquaires/moustiquaire-2.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
            ],
        ],
        'multi' => [
            'name' => 'Multi-Services',
            'photos' => [
                [
                    'image' => 'projects-gallery/multi/acces-garage.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/depannage-serrure.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/moisissures.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/moisissures-apres-decoupe.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/moisissures-apres-reparation.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/nettoyage-zone.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/placard-sans-porte.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/multi/placard-avec-porte.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],

      ],
        ],
        'porte-entree' => [
            'name' => 'Porte d\'entrée',
            'photos' => [
                [
                    'image' => 'projects-gallery/porte/porte-bois.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
            ],
        ],
        'porte-garage' => [
            'name' => 'Porte de garage',
            'photos' => [
                [
                    'image' => 'projects-gallery/porte-garage/mecanisme-porte-garage.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/porte-garage/porte-garage-electrique.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
            ],
        ],
        'revetement' => [
            'name' => 'Revêtement de sol',
            'photos' => [
                [
                    'image' => 'projects-gallery/revetement/pose-parquet.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/revetement/pose-parquet-2.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/revetement/terrasse-bois.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/revetement/terrasse-composite.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
            ],
        ],
         'volets' => [
            'name' => 'Volets',
            'photos' => [
                [
                    'image' => 'projects-gallery/volets/caisson-volets-interieur.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/volets/volet-roulant-ouvert.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
    [
                    'image' => 'projects-gallery/volets/volets-solaires.webp', 'location' => 'Sainte-Julie',
                     'description' => ""
    ],
            ],
        ],
    ];

@endphp

@section('content')
    <div class="col-10 mx-auto my-5 text-center">
        <h1 class="mb-4 bg-white-soft">Galerie de Réalisations</h1>
        <h3>Pour suivre et retrouver toutes mes dernières réalisations rendez-vous sur <a href="https://www.instagram.com/jdtravaux" target="_blank" class="link-dark" aria-label="vers la page Instagram de Jd travaux service">
                <span class="instagram"><i class="fa-brands fa-xl fa-instagram"></i></span></a> et <a href="https://www.facebook.com/JDTravauxServices" class="link-dark" target="_blank" aria-label="vers la page Facebook de Jd travaux service">
                <span class="facebook"><i class="fa-brands fa-xl fa-square-facebook"></i></span></a>
        </h3>
        <section>
            <x-photo-gallery
                    :categories="$categories"
            />
        </section>
    </div>
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
