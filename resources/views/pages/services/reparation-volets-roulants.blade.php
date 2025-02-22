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
       'av-fenetre.jpg',
        'ap-fenetre.jpg',
    ]"
            :faq="[
        ['question' => 'Quels types de volets roulants réparez-vous ?', 'answer' => 'Nous proposons réparons tous les types de volets, manuels, électriques ou solaires'],
        ['question' => 'Quelle est le délai d\'intervantion ?', 'answer' => 'En moyenne, j\'interviens dans les 24 heures.'],
        ['question' => 'Avez-vous vous les pièces en stock ?', 'answer' => 'Grâce à mon expérience j\'ai en stock les pièces nécessaires aux pannes les plus courantes.']
    ]"
        />
    </section>
@endsection
