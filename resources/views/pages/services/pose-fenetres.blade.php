@extends('layouts.app')

@section('content')
    <section>
<x-service
    title="Pose de fenêtres"
    description="Je suis opérationnel dans la pose de tous types de fenêtres en PVC, en aluminium ou en bois de marque française avec différentes méthodes d'installation : rénovation, dépose totale ou pose en neuf.
Grâce à mon expertise, je peux vous conseiller sur le choix des matériaux et des techniques d'installation les mieux adaptés à vos besoins.
Que vous souhaitiez remplacer vos anciennes fenêtres, rénover votre logement ou construire une nouvelle maison, je suis là pour vous fournir un service de qualité et vous garantir une installation professionnelle.
Faites-moi confiance pour l'installation de vos fenêtres et profitez d'une isolation thermique et phonique optimale, ainsi que d'un design esthétique qui s'harmonisera parfaitement avec votre intérieur. bénéficiez d'un travail soigné et minutieux."
    :advantages="[
        'Isolation thermique renforcée',
        'Installation rapide',
        'Matériaux de haute qualité',
        'Garantie décennale'
    ]"
    :gallery="[
       ['src' => 'av-fenetre.webp', 'figcaption' => ''],
       ['src' => 'ap-fenetre.webp', 'figcaption' => '']
    ]"

    :faq="[
        ['question' => 'Quelle est la durée d’installation ?', 'answer' => 'L’installation d’une fenêtre prend en moyenne une demi-journée, variable selon le type de pose (neuf, rénovation, dépose totale, finitions).'],
        ['question' => 'Proposez-vous des fenêtres sur mesure', 'answer' => 'Oui, je réalise des fenêtres entièrement personnalisées. Une prise de cotes est effectuée avant le devis pour s’assurer d’une installation parfaite.'],
    ]"
/>
    </section>
@endsection
