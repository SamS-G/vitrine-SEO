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
      ['src' => 'parquet.webp', 'figcaption' => 'Image à des fin d\'illustration uniquement'],
      ['src' => 'parquet-2.webp', 'figcaption' => 'Image à des fin d\'illustration uniquement'],
    ]"
            :faq="[
        ['question' => 'Quels types de revêtements de sol proposez-vous ?', 'answer' => 'Je propose la vente et la pose de parquets stratifiés, massifs et dalles vinyles.'],
        ['question' => 'Combien de temps dure la pose ?', 'answer' => 'Cela dépend de la surface, du support existant et de l’accessibilité du chantier.'],
        ['question' => 'Quelle est la durée de vie d’un parquet ?', 'answer' => 'Parquet stratifié : jusqu’à 25 ans. Parquet massif : jusqu’à 100 ans avec un bon entretien']
    ]"
        />
    </section>
@endsection
