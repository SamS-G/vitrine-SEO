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
       ['src' => 'porte-garage.webp', 'figcaption' => 'TechPro, porte sectionnelle'],
       ['src' => 'porte-garage-2.webp', 'figcaption' => 'TechPro, porte coulissante'],
    ]"
            :faq="[
        ['question' => ' Quels types de portes de garage proposez-vous ?', 'answer' => 'J\'installe des portes sectionnelles, basculantes, battantes, coulissantes ou à enroulement.'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'L\’installation prend environ une journée, selon le modèle et le raccordement électrique.'],
        ['question' => 'Quelles motorisations proposez-vous ?', 'answer' => 'Nous utilisons exclusivement des motorisations Somfy, reconnues pour leur fiabilité et compatibilité domotique.']
    ]"
        />
    </section>
@endsection
