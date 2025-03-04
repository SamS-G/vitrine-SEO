@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="Dépannage des volets"
            description="Je vous propose une offre de dépannage sur vos volets roulants en PVC ou en aluminium.
             Après une première visite, je procède à un diagnostic complet pour identifier la panne.
             Selon mes observations, je vous propose différentes solutions, telles que le remplacement du moteur,
             du tablier ou le remplacement des agrafes si nécessaires. Je m'engage à fournir un dépannage rapide et efficace,
              afin de rétablir le bon fonctionnement de vos volets en un minimum de temps.
             Vous pouvez compter sur mon expertise pour garantir la durabilité et la performance de vos installations.
             N'hésitez pas à nous contacter pour un service de qualité adapté à vos besoins."
            :advantages="[
            'Service rapide',
            'Accès au pièces de toutes marques',
            'Sécurité',
            'Economique'
    ]"
            :gallery="[
        ['src' => 'depannage-volet.webp', 'figcaption' => ''],
        ['src' => 'depannage-volet-2.webp', 'figcaption' => ''],
    ]"
            :faq="[
        ['question' => 'Quels types de volets réparez-vous ?', 'answer' => 'Tous les modèles : manuels, électriques et solaires.'],
        ['question' => 'Quel est votre délai d’intervention ?', 'answer' => 'Sous 48h, avec un devis rapide.'],
        ['question' => 'Avez-vous des pièces en stock ?', 'answer' => 'J\'ai les pièces mécaniques en stock, et je peux commander rapidement les motorisations adaptées.']
    ]"
        />
    </section>
@endsection
