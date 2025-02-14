@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de volets roulants"
            description="Je peux effectuer la pose de volets roulants électriques et solaires, adaptés à tout types d'ouverture. Je veille à ce que la pose soit parfaitement adaptée à vos besoins et à la configuration de votre habitation.
                         Faites confiance à mon expertise et à mon savoir-faire pour obtenir des installations de qualité qui répondent à vos attentes. Ne laissez pas les moustiques gâcher vos nuits, optez pour des volets roulants de haute qualité."
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
        ['question' => 'Quels types de volets proposez-vous ?', 'answer' => 'Nous proposons des volets roulants manuels, électriques et solaire.'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => 'Proposez-vous des fenêtres sur mesure ?', 'answer' => 'Oui, nous réalisons des volets entièrement personnalisées selon vos besoins.']
    ]"
        />
    </section>
@endsection
