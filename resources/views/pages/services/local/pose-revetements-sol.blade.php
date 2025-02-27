@extends('layouts.app')
@section('title', $meta_data->meta_title)
@section('meta_description', $meta_data->meta_description)

@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Pose de revêtements de sol à {{ $city->name }}</h1>
        <p class="text-center text-muted">Esthétique, confort & durabilité – Un sol adapté à votre intérieur</p>
        <div class="d-flex justify-content-around">
            <div class="col-md-6">
                <h2 class="h3-xl my-4">Mes types de revêtements de sol</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Parquet massif & stratifié : Apportez une touche chaleureuse et
                        naturelle à votre intérieur.
                    </li>
                    <li class="list-group-item">✅ Carrelage & faïence : Élégant et résistant, idéal pour les pièces
                        humides.
                    </li>
                    <li class="list-group-item">✅ Vinyle & PVC : Une solution économique, moderne et facile
                        d’entretien.
                    </li>
                    <li class="list-group-item">✅ Béton ciré : Parfait pour un style industriel et une grande
                        résistance.
                    </li>
                    <li class="list-group-item">✅ Moquette : Confort et isolation phonique assurés pour une ambiance
                        cosy.
                    </li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3 cta-button">Demander un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">Mes réalisations près de {{ $city->name }}</h2>
                    <p>Je réalise la pose de revêtements de sol sur mesure dans toute la ville de {{ $city->name }},
                        y compris dans les secteurs suivants :
                        {{ implode(', ',(array)json_decode($city->landmarks)) }}
                    .</p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/pose-revetement.webp') : Vite::asset('resources/images/services/local/pose-revetement.webp')  }}"
                alt="Pose de revêtements de sol à {{ $city->name }}"
                title="Pose de revêtements de sol à {{ $city->name }}"
                class="img-fluid rounded">
        </div>
    </div>
@endsection
