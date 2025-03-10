<?php

return [
// layout/app.blade
    'app' => [
        //    Navbar component
        'navItems' => [
            ['title' => 'Accueil', 'href' => 'home'],
            ['title' => 'Tous les Services', 'href' => 'services'],
            ['title' => 'Mes Réalisations', 'href' => 'realisations'],
            ['title' => 'JD Travaux Services', 'href' => 'presentation'],
            ['title' => 'Mes Marques', 'href' => 'marques'],
            ['title' => 'Zones d’interventions', 'href' => 'zone-interventions'],
            ['title' => 'Contact', 'href' => 'contact'],
        ]
    ],
// pages/main/
    'realisations' => [
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
    ],
    'services' => [
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
            'title' => 'Pose de portes de garage',
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
            'route' => 'services/depannage-volets-roulants',
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
    ],
// pages/services/
'service' => [
//        Fenêtre
    'pose-fenetres' => [
        'title' => "Pose de fenêtres",
        'description' => "Je suis opérationnel dans la pose de tous types de fenêtres en PVC, en aluminium ou en bois de marque française avec différentes méthodes d'installation : rénovation, dépose totale ou pose en neuf.
Grâce à mon expertise, je peux vous conseiller sur le choix des matériaux et des techniques d'installation les mieux adaptés à vos besoins.
Que vous souhaitiez remplacer vos anciennes fenêtres, rénover votre logement ou construire une nouvelle maison, je suis là pour vous fournir un service de qualité et vous garantir une installation professionnelle.
Faites-moi confiance pour l'installation de vos fenêtres et profitez d'une isolation thermique et phonique optimale, ainsi que d'un design esthétique qui s'harmonisera parfaitement avec votre intérieur. bénéficiez d'un travail soigné et minutieux.",
        'advantages' => [
            'Isolation thermique renforcée',
            'Installation rapide',
            'Matériaux de haute qualité',
            'Garantie décennale'
        ],
        'gallery' => [
            ['src' => 'av-fenetre.webp', 'figcaption' => ''],
            ['src' => 'ap-fenetre.webp', 'figcaption' => '']
        ],
        'faq' => [
            ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'L’installation d’une fenêtre prend en moyenne une demi-journée, variable selon le type de pose (neuf, rénovation, dépose totale, finitions).'],
            ['question' => 'Proposez-vous des fenêtres sur mesure', 'answer' => 'Oui, je réalise des fenêtres entièrement personnalisées. Une prise de cotes est effectuée avant le devis pour s’assurer d’une installation parfaite.'],
        ]
    ],
//        Moustiquaire
    'pose-moustiquaires' => [
        'title' => "Pose de moustiquaires",
        'description' => "Avec l’arrivée des beaux jours, les moustiques et autres insectes envahissent nos maisons, rendant nos nuits inconfortables. La solution idéale ? Installer des moustiquaires sur vos fenêtres et portes !",
        'advantages' => ['Protection contre les insectes : Empêche les moustiques, mouches et autres nuisibles d’entrer.',
            'Circulation de l’air optimisée : Profitez d’un intérieur frais sans avoir à fermer vos fenêtres.',
            'Solution écologique : Évitez les insecticides et autres produits chimiques nocifs.',
            'Confort et discrétion : Des modèles adaptés à toutes les ouvertures, presque invisibles une fois posés.'],
        'gallery' => [
            ['src' => 'moustiquaire.webp', 'figcaption' => 'AMB gamme Neoscenica'],
            ['src' => 'moustiquaire-2.webp', 'figcaption' => 'AMB gamme Estetica']
        ],
        'faq' => [
            ['question' => 'Quels types de moustiquaires proposez-vous ?', 'answer' => 'Pour les fenêtres standards un système à enroulement vertical. Pour les baies vitrées un système coulissant ou rideau latéral.'],
            ['question' => ' Combien de temps dure l’installation ?', 'answer' => 'L’installation prend environ 2 heures, incluant les finitions comme le joint silicone pour une étanchéité optimale'],
        ]
    ],
//        Portail
    'pose-portails' => [
        'title' => "Pose de portails",
        'description' => "Je propose également la pose de portail coulissant ou battant, ainsi que des portes de garage sectionnelles. Que vous souhaitiez installer un portail coulissant ou un portail battant, je suis là pour vous conseiller et réaliser une installation de haute qualité.",
        'advantages' => [
            'Sécurité accrue',
            'Intimité préservée',
            'Confort et praticité (si motorisé)',
            'Esthétique et valorisation du bien'
        ],
        'gallery' => [
            ['src' => 'portail.webp', 'figcaption' => 'La Toulousaine, gamme Velden'],
            ['src' => 'portail-2.webp', 'figcaption' => 'La Toulousaine, gamme Tanna Duo'],
        ],
        'faq' => [
            ['question' => 'Quels types de porte portails proposez-vous ?', 'answer' => 'Je propose des portails battants ou coulissants, avec ou sans motorisation.'],
            ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'Portail manuel : ½ journée. Portail motorisé : 1 journée'],
            ['question' => 'Quelle motorisation recommandez-vous ?', 'answer' => 'J\'installe des motorisations Somfy, fiables et compatibles avec les systèmes domotiques.']
        ]
    ],
//        Portes entrée
    'pose-portes-entree' => [
        'title' => "Pose de portes",
        'description' => "Je suis opérationnel dans la pose de tous types de porte d'entrée classique ou blindé. Grâce à mon expertise, je peux vous conseiller sur le choix des matériaux et des techniques d'installation les mieux adaptés à vos besoins.
             Que vous souhaitiez remplacer votre ancienne porte d'entrée, rénover votre logement ou construire une nouvelle maison, je suis là pour vous fournir un service de qualité et vous garantir une installation professionnelle.
             Faites-moi confiance pour l'installation de vos fenêtres et profitez d'une isolation thermique et phonique optimale, ainsi que d'un design esthétique qui s'harmonisera parfaitement avec votre intérieur. bénéficiez d'un travail soigné et minutieux.",
        'advantages' => [
            'Meilleure sécurité',
            'Efficacité énergétique améliorée',
            'Amélioration de l\'esthétique',
            'Réduction de l\'entretien'
        ],
        'gallery' => [
            ['src' => 'porte-entree.webp', 'figcaption' => 'Bel\'m Style contemporain'],
            ['src' => 'porte-entree-2.webp', 'figcaption' => 'Bel\'m Porte vitrée'],
        ],
        'faq' => [
            ['question' => 'Quels types de portes d’entrée installez-vous ?', 'answer' => 'La pose prend une journée, souvent en dépose totale pour ne pas réduire la largeur de passage.'],
            ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
            ['question' => ' Proposez-vous des portes sur mesure ?', 'answer' => 'Oui, toutes les portes sont réalisées sur mesure pour s’adapter parfaitement à votre ouverture.']
        ]
    ],
//        Portes garage
    'pose-portes-garage' => [
        'title' => "Pose de portes de garage",
        'description' => "Nos portes de garage sectionnelles offrent une sécurité maximale et une isolation optimale, ce qui vous permet de protéger votre véhicule et votre maison de manière efficace avec une motorisation de qualité de marque française SOMFY ou BFT.",
        'advantages' => [
            'Amélioration de l\'isolation thermique et phonique ',
            'Sécurité renforcée',
            'Confort et praticité',
            'Esthétique et valorisation du bien'
        ],
        'gallery' => [
            ['src' => 'porte-garage.webp', 'figcaption' => 'TechPro, porte sectionnelle'],
            ['src' => 'porte-garage-2.webp', 'figcaption' => 'TechPro, porte coulissante'],
        ],
        'faq' => [
            ['question' => ' Quels types de portes de garage proposez-vous ?', 'answer' => 'J\'installe des portes sectionnelles, basculantes, battantes, coulissantes ou à enroulement.'],
            ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'L\’installation prend environ une journée, selon le modèle et le raccordement électrique.'],
            ['question' => 'Quelles motorisations proposez-vous ?', 'answer' => 'Nous utilisons exclusivement des motorisations Somfy, reconnues pour leur fiabilité et compatibilité domotique.']
        ]
    ],
//        Revêtements
    'pose-revetements-sol' => [
        'title' => "Pose revêtements de sol",
        'description' => "Je vous propose la pose de tout type de revêtements de sol que ce soit en bois ou composite. Tous type de surfaces",
        'advantages' => [
            'Esthétique et chaleur',
            'Confort et bien-être',
            'Durabilité et résistance',
            'Isolation phonique et thermique'
        ],
        'gallery' => [
            ['src' => 'parquet.webp', 'figcaption' => 'Image à des fin d\'illustration uniquement'],
            ['src' => 'parquet-2.webp', 'figcaption' => 'Image à des fin d\'illustration uniquement'],
        ],
        'faq' => [
            ['question' => 'Quels types de revêtements de sol proposez-vous ?', 'answer' => 'Je propose la vente et la pose de parquets stratifiés, massifs et dalles vinyles.'],
            ['question' => 'Combien de temps dure la pose ?', 'answer' => 'Cela dépend de la surface, du support existant et de l’accessibilité du chantier.'],
            ['question' => 'Quelle est la durée de vie d’un parquet ?', 'answer' => 'Parquet stratifié : jusqu’à 25 ans. Parquet massif : jusqu’à 100 ans avec un bon entretien']
        ]
    ],
//        Volets roulants
    'pose-volets-roulants' => [
        'title' => "Pose de volets roulants",
        'description' => "Je peux effectuer la pose de volets roulants électriques et solaires, adaptés à tout types d'ouverture. Je veille à ce que la pose soit parfaitement adaptée à vos besoins et à la configuration de votre habitation.
                         Faites confiance à mon expertise et à mon savoir-faire pour obtenir des installations de qualité qui répondent à vos attentes. Ne laissez pas les moustiques gâcher vos nuits, optez pour des volets roulants de haute qualité.",
        'advantages' => [
            'Amélioration de l\'isolation thermique et phonique ',
            'Sécurité renforcée',
            'Confort et praticité',
            'Esthétique et valorisation du bien'
        ],
        'gallery' => [
            ['src' => 'volet-roulant.webp', 'figcaption' => 'Gamme PTR & PTS'],
            ['src' => 'volet-roulant-2.webp', 'figcaption' => 'Gamme VA'],
        ],
        'faq' => [
            ['question' => 'Quels types de volets roulants proposez-vous ?', 'answer' => 'Je propose des volets roulants manuels, électriques, solaires, ainsi que la motorisation de vos volets existants.'],
            ['question' => ' Combien de temps prend l’installation ?', 'answer' => 'Entre 2 et 4 heures, selon le type de pose et le raccordement électrique.'],
            ['question' => ' Peut-on personnaliser les volets roulants ?', 'answer' => 'Oui, tout est personnalisable : dimensions, coloris, motorisation…']
        ]
    ],
//        Dépannage volets
    'depannage-volets-roulants' => [
        'title' => "Depannage des volets roulants",
        'description' => "Je vous propose une offre de dépannage sur vos volets roulants en PVC ou en aluminium.
             Après une première visite, je procède à un diagnostic complet pour identifier la panne.
             Selon mes observations, je vous propose différentes solutions, telles que le remplacement du moteur,
             du tablier ou le remplacement des agrafes si nécessaires. Je m'engage à fournir un dépannage rapide et efficace,
              afin de rétablir le bon fonctionnement de vos volets en un minimum de temps.
             Vous pouvez compter sur mon expertise pour garantir la durabilité et la performance de vos installations.
             N'hésitez pas à nous contacter pour un service de qualité adapté à vos besoins.",
        'advantages' => [
            'Service rapide',
            'Accès au pièces de toutes marques',
            'Sécurité',
            'Economique'
        ],
        'gallery' => [
            ['src' => 'depannage-volet.webp', 'figcaption' => ''],
            ['src' => 'depannage-volet-2.webp', 'figcaption' => ''],
        ],
        'faq' => [
            ['question' => 'Quels types de volets réparez-vous ?', 'answer' => 'Tous les modèles : manuels, électriques et solaires.'],
            ['question' => 'Quel est votre délai d’intervention ?', 'answer' => 'Sous 48h, avec un devis rapide.'],
            ['question' => 'Avez-vous des pièces en stock ?', 'answer' => 'J\'ai les pièces mécaniques en stock, et je peux commander rapidement les motorisations adaptées.']
        ]
    ],
//        Multi-services
    'travaux-batiment' => [
        'title' => "Multi-services",
        'description' => "
Je suis ravi de pouvoir offrir mes services complets de petits travaux pour l'entretien de votre maison.
Pour la réparation d'un robinet qui fuit, le changement d'une ampoule, l'assemblage de meubles, la pose d'un parquet ou une terrasse bois, je suis là pour vous aider avec une palette de savoir-faire.
Mon objectif est de rendre votre vie plus facile en prenant en charge tous les petits travaux dont votre maison a besoin.
Vous n'aurez plus à vous soucier des bricolages et des réparations, car je suis là pour m'en occuper. Avec mon expérience et mon expertise, je m'assurerai que chaque travail est effectué avec soin et professionnalisme.
N'hésitez pas à me contacter pour discuter de vos besoins même les plus originaux, je serai ravi de vous aider.
Vous voulez apprendre? Je peux aussi vous proposer de travailler avec vous sur votre chantier!",
        'advantages' => [
            'Economie',
            'Polyvalence',
            'Garantie',
            'Expertise'
        ],
        'gallery' => [
            ['src' => 'plomberie.webp', 'figcaption' => 'Travaux de plomberie'],
            ['src' => 'electricite.webp', 'figcaption' => 'Travaux électriques'],
            ['src' => 'maconnerie.webp', 'figcaption' => 'Travaux de maçonnerie'],
        ],
        'faq' => [
            ['question' => 'Quels types de prestations proposez-vous ?', 'answer' => 'Je vous accompagne pour tous types de travaux d’aménagement et de rénovation. Je garanti un devis sous 7 jours et une intervention rapide selon votre type de projet.'],
        ]
    ]
]
];
