@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de portes de garage"
            description="Nos portes de garage sectionnelles offrent une sécurité maximale et une isolation optimale, ce qui vous permet de protéger votre véhicule et votre maison de manière efficace avec une motorisation de qualité de marque française SOMFY ou BFT."
            :advantages="[
            'Amélioration de l\'isolation thermique et phonique ',
            'Sécurité renforcée',
            'Confort et praticité',
            'Esthétique et valorisation du bien'
    ]"
            :gallery="[
       '/av-fenetre.jpg',
        '/ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de porte de garage proposez-vous ?', 'answer' => 'Nous proposons des portes de garage sectionnelles.'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => 'Quelles motorisations proposez-vous ?', 'answer' => 'Nous proposons uniquement de motorisation de haute qualité de marque Somfy et BFT.']
    ]"
        />
    </section>
@endsection
