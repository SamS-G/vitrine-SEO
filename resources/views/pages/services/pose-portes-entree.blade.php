@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Pose de portes"
            description="Je suis opérationnel dans la pose de tous types de porte d'entrée classique ou blindé.
                         Grâce à mon expertise, je peux vous conseiller sur le choix des matériaux et des techniques d'installation les mieux adaptés à vos besoins.
                         Que vous souhaitiez remplacer votre ancienne porte d'entrée, rénover votre logement ou construire une nouvelle maison, je suis là pour vous fournir un service de qualité et vous garantir une installation professionnelle.
                         Faites-moi confiance pour l'installation de vos fenêtres et profitez d'une isolation thermique et phonique optimale, ainsi que d'un design esthétique qui s'harmonisera parfaitement avec votre intérieur. bénéficiez d'un travail soigné et minutieux."
            :advantages="[
            'Meilleure sécurité',
            'Efficacité énergétique améliorée',
            'Amélioration de l\'esthétique',
            'Réduction de l\'entretien'
    ]"
            :gallery="[
 ['src' => 'porte-entree.webp', 'figcaption' => 'Bel\'m Style contemporain'],
 ['src' => 'porte-entree-2.webp', 'figcaption' => 'Bel\'m Porte vitrée'],
    ]"
            :faq="[
        ['question' => 'Quels types de portes d’entrée installez-vous ?', 'answer' => 'La pose prend une journée, souvent en dépose totale pour ne pas réduire la largeur de passage.'],
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'En moyenne, l’installation d’une fenêtre prend 3 à 4 heures.'],
        ['question' => ' Proposez-vous des portes sur mesure ?', 'answer' => 'Oui, toutes les portes sont réalisées sur mesure pour s’adapter parfaitement à votre ouverture.']
    ]"
        />
    </section>
@endsection
