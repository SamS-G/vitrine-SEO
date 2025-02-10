@extends('layouts.app')

@section('title', $meta_title)

@section('meta_description', $meta_description)

@section('meta_schema')
    <script type="application/ld+json">
        {!! $meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Pose de fenêtres à Ambérieu-en-Bugey</h1>

        <p>Vous recherchez un expert en pose de fenêtres à Ambérieu-en-Bugey ? JD Travaux Services vous accompagne de la sélection à l'installation de vos fenêtres en PVC, bois, ou aluminium.</p>

        <h2>Nos services à Ambérieu-en-Bugey</h2>
        <ul>
            <li>Installation de fenêtres sur-mesure</li>
            <li>Remplacement de fenêtres anciennes</li>
            <li>Pose de volets roulants et battants</li>
        </ul>

        <h3>Pourquoi choisir JD Travaux Services à Ambérieu-en-Bugey ?</h3>
        <p>Avec plus de 10 ans d’expérience, nous garantissons des prestations de qualité, adaptées aux besoins des habitants d'Ambérieux. De la <strong>Maison des Sociétés</strong> aux quartiers résidentiels proches de la <strong>Gare d'Ambérieu</strong>, nous sommes à votre service !</p>

        <h3>Contactez-nous !</h3>
        <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis gratuit</a>
    </div>
@endsection
