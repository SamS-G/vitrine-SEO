@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de portails"
            description="Je propose également la pose de portail coulissant ou battant, ainsi que des portes de garage sectionnelles.
                         Que vous souhaitiez installer un portail coulissant ou un portail battant, je suis là pour vous conseiller et réaliser une installation de haute qualité."
            :advantages="[
            'Sécurité accrue',
            'Intimité préservée',
            'Confort et praticité (si motorisé)',
            'Esthétique et valorisation du bien'
    ]"
            :gallery="[
       '/av-fenetre.jpg',
        '/ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de porte portails proposez-vous ?', 'answer' => 'Nous proposons des portails coulissants ou battants'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => 'Quelles motorisations proposez-vous ?', 'answer' => 'Nous proposons uniquement de motorisation de haute qualité de marque Somfy et BFT.']
    ]"
        />
    </section>
@endsection
