@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de moustiquaires"
            description="Avec l’arrivée des beaux jours, les moustiques et autres insectes envahissent nos maisons, rendant nos nuits inconfortables. La solution idéale ? Installer des moustiquaires sur vos fenêtres et portes !"
            :advantages="[
            'Protection contre les insectes : Empêche les moustiques, mouches et autres nuisibles d’entrer.',
'Circulation de l’air optimisée : Profitez d’un intérieur frais sans avoir à fermer vos fenêtres.',
'Solution écologique : Évitez les insecticides et autres produits chimiques nocifs.',
'Confort et discrétion : Des modèles adaptés à toutes les ouvertures, presque invisibles une fois posés.'
    ]"
            :gallery="[
       ['src' => 'moustiquaire.webp', 'figcaption' => 'AMB gamme Neoscenica'],
       ['src' => 'moustiquaire-2.webp', 'figcaption' => 'AMB gamme Estetica']
    ]"
            :faq="[
        ['question' => 'Quels types de moustiquaires proposez-vous ?', 'answer' => 'Pour les fenêtres standards un système à enroulement vertical.
                                                                                    Pour les baies vitrées un système coulissant ou rideau latéral.
'],
        ['question' => ' Combien de temps dure l’installation ?', 'answer' => 'L’installation prend environ 2 heures, incluant les finitions comme le joint silicone pour une étanchéité optimale'
        ],
    ]"
        />
    </section>
@endsection
