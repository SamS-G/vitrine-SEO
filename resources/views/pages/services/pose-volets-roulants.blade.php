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
    ['src' => 'volet-roulant.webp', 'figcaption' => 'Gamme PTR & PTS'],
    ['src' => 'volet-roulant-2.webp', 'figcaption' => 'Gamme VA'],
    ]"
            :faq="[
        ['question' => 'Quels types de volets roulants proposez-vous ?', 'answer' => 'Je propose des volets roulants manuels, électriques, solaires, ainsi que la motorisation de vos volets existants.'],
        ['question' => ' Combien de temps prend l’installation ?', 'answer' => 'Entre 2 et 4 heures, selon le type de pose et le raccordement électrique.'],
        ['question' => ' Peut-on personnaliser les volets roulants ?', 'answer' => 'Oui, tout est personnalisable : dimensions, coloris, motorisation…']
    ]"
        />
    </section>
@endsection
