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
       'av-fenetre.jpg',
       'ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de porte portails proposez-vous ?', 'answer' => 'Nous proposons des portails coulissants ou battants'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => 'Quelles motorisations proposez-vous ?', 'answer' => 'Nous proposons uniquement de motorisation de haute qualité de marque Somfy et BFT.']
    ]"
        />
    </section>
@endsection
