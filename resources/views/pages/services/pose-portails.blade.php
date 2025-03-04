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
         ['src' => 'portail.webp', 'figcaption' => 'La Toulousaine, gamme Velden'],
         ['src' => 'portail-2.webp', 'figcaption' => 'La Toulousaine, gamme Tanna Duo'],
    ]"
            :faq="[
        ['question' => 'Quels types de porte portails proposez-vous ?', 'answer' => 'Je propose des portails battants ou coulissants, avec ou sans motorisation.'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'Portail manuel : ½ journée. Portail motorisé : 1 journée'],
        ['question' => 'Quelle motorisation recommandez-vous ?', 'answer' => 'J\'installe des motorisations Somfy, fiables et compatibles avec les systèmes domotiques.']
    ]"
        />
    </section>
@endsection
