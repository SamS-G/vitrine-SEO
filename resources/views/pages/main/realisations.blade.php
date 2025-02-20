@extends('layouts.app')
@section('title', 'Réalisations - JD Travaux Services')

@php
    $categories = [
    'fenetres' => [
        'name' => 'Fenêtres',
        'photos' => [
            [
                'image' => '/projects-gallery/fenetres/av-ap-fenetre.jpg',
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
    'image' => '/projects-gallery/fenetres/fenetre-blanche.webp',
    'location' => 'Sainte-Julie',
    'description' =>
    "<p>Le client désirait remplacer sa porte de garage par un châssis vitré.</p>
<p>Après une demande en mairie suite à la modification de la façade et un changement d'utilisation de cette pièce
nous concevons un châssis suivant les demandes et les impératifs du client et ajoutons un volet roulant.</p>
<p>Suite à commande la du châssis et du volet chez notre fabricant français nous posons le châssis et le volet.</p>
"
],
        ],
    ],
        'moustiquaire' => [
        'name' => 'Moustiquaire',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
     'multi' => [
        'name' => 'Multi-Services',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
     'porte entree' => [
        'name' => 'Porte d\'entrée',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
     'porte-garage' => [
        'name' => 'Porte de garage',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
     'sol' => [
        'name' => 'Revêtement de sol',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
     'volets' => [
        'name' => 'Volets',
        'photos' => [
            [
                'image' => '/projects-gallery/moustiquaires/fenetre-anthracite.webp', 'location' => 'Sainte-Julie',
                 'description' =>
                 "<p>Le client est envahi par les moustiques et ne peuvent plus ouvrir leurs fenêtres.</p>
                 <ul>
                 <li>- une moustiquaire latéral est conseillée car la vitre est trop large pour une moustiquaire vertical</li>
                 <li>- commande de la moustiquaire, sur mesure avec une couleur et une toile personnalisé de fabrication française</li>
                 <li>- pose et conseils d'utilisation</li>
                 </ul>
                <p>Résultat : le client retrouve des nuits paisibles</p>"
],
        ],
    ],
];

@endphp

@section('content')
    <div class="col-10 mx-auto my-5">
        <h1 class="text-center mb-4 bg-white-soft">Galerie de Réalisations</h1>
        <section>
            <x-photo-gallery
                    :categories="$categories"
            />
        </section>
    </div>
@endsection
