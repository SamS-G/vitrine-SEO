@extends('layouts.app')
@section('title', $meta_data->meta_title)
@section('meta_description', $meta_data->meta_description)
@section('local_meta_data')
    <script type="application/ld+json">
        {!! $meta_data->meta_schema !!}
    </script>
@endsection
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <div class="container py-xl-5 mb-3">
        <h1 class="text-center bg-white-soft mb-xl-5">Pose de moustiquaires à {{ $city->name }}</h1>
        <p class="text-center text-muted">Protection efficace contre les insectes – Confort & discrétion toute l’année</p>
        <div class="d-flex justify-content-around">
            <div class="col-md-6">
                <h2 class="h3-xl my-4">Mes types de moustiquaires</h2>
                <ul class="list-group">
                    <li class="list-group-item">✅ Moustiquaires enroulables : Idéales pour les fenêtres et baies vitrées, elles se rétractent facilement.</li>
                    <li class="list-group-item">✅ Moustiquaires fixes : Une solution économique et durable pour une protection permanente.</li>
                    <li class="list-group-item">✅ Moustiquaires coulissantes : Parfaites pour les portes-fenêtres et les vérandas.</li>
                    <li class="list-group-item">✅ Moustiquaires magnétiques : Simples à poser et à retirer, sans perçage.</li>
                    <li class="list-group-item">✅ Moustiquaires plissées : Élégantes et ultra-pratiques pour les grandes ouvertures.</li>
                </ul>
                <a href="{{ url('contact') }}" class="btn button mt-3 cta-button">Demander un devis</a>
                <div class="mt-3">
                    <h2 class="mt-5">J'interviens à {{ $city->name }}</h2>
                    <p>J'installe vos moustiquaires sur mesure dans toute la ville de {{ $city->name }}, notamment
                        dans les quartiers suivants :{{ implode(', ',(array)json_decode($city->landmarks)) }}.
                    </p>
                </div>
            </div>
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/services/local/moustiquaire.webp') : Vite::asset('resources/images/services/local/moustiquaire.webp')  }}"
                alt="Pose de fenêtres à {{ $city->name }}"
                title="Pose de fenêtres à {{ $city->name }}"
                class="img-fluid rounded">
        </div>
    </div>
@endsection
