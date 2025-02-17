@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de revêtements de sol"
            description="Je vous propose la pose de tout type de revêtements de sol que ce soit en bois ou composite. Tous type de surfaces"
            :advantages="[
            'Esthétique et chaleur',
            'Confort et bien-être',
            'Durabilité et résistance',
            'Isolation phonique et thermique'
    ]"
            :gallery="[
       '/av-fenetre.jpg',
        '/ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de revêtements de sol proposez-vous ?', 'answer' => 'Nous proposons du parquet bois ou du parquet résine'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => 'Quelles est la durée de vie moyenne ?', 'answer' => 'Avec un entretiens vous pouvez compter entre 20 et 30 ans']
    ]"
        />
    </section>
@endsection
