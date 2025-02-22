@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Multi-services"
            description="
Je suis ravi de pouvoir offrir mes services complets de petits travaux pour l'entretien de votre maison.
Pour la réparation d'un robinet qui fuit, le changement d'une ampoule, l'assemblage de meubles, la pose d'un parquet ou une terrasse bois, je suis là pour vous aider avec une palette de savoir-faire.
Mon objectif est de rendre votre vie plus facile en prenant en charge tous les petits travaux dont votre maison a besoin.
Vous n'aurez plus à vous soucier des bricolages et des réparations, car je suis là pour m'en occuper. Avec mon expérience et mon expertise, je m'assurerai que chaque travail est effectué avec soin et professionnalisme.
N'hésitez pas à me contacter pour discuter de vos besoins même les plus originaux, je serai ravi de vous aider.
Vous voulez apprendre? Je peux aussi vous proposer de travailler avec vous sur votre chantier!"
            :advantages="[
            'Economie',
            'Polyvalence',
            'Garantie',
            'Expertise'
    ]"
            :gallery="[
       'av-fenetre.jpg',
        'ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de prestations proposez-vous ?', 'answer' => 'Nous proposons la pose de terrasses, travaux plomberie, serrurerie, aide et formation sur votre chantier'],
        ['question' => 'Quelle est le délai d\'intervention ?', 'answer' => 'En moyenne, et selon le type de travaux comptez 7 jours.'],
    ]"
        />
    </section>
@endsection
