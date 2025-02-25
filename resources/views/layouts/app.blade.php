<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--    Critical CSS --}}
    {{--    <style>--}}
    {{--    </style>--}}
    {{--  Image lourde du header/hero --}}
    @if(request()->is('/'))
        <link rel="preload" as="image" href="http://213.130.144.31/build/assets/redHouse.webp" type="image/webp">
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jd Travaux Services')</title>
    <meta name="description" content="@yield('meta_description', "$base_meta_schema->meta_description")">
    {{-- FONTS --}}
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Baloo/Baloo-Regular.ttf') }}" as="font" type="font/woff2"
          crossorigin="anonymous"/>
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Playwrite_GB_S/PlaywriteGBS-VariableFont_wght.ttf') }}"
          as="font" type="font/woff2" crossorigin="anonymous"/>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">
    {{-- CSS différé--}}
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
    </noscript>
    @vite(['resources/js/app.js'])
    {{-- Meta générique uniquement --}}
    <script type="application/ld+json">
        {!! $base_meta_schema->meta_schema !!}
    </script>
    {{-- Meta service local --}}
    @yield('local_meta_data')
    <!-- Stack pour ajouter des styles spécifiques à chaque page -->
    @stack('styles')
    @stack('scripts')

</head>

<body>

@if(request()->is('/'))
    <x-topBanner/>
@endif

<header>
    <x-navbar
        :navItems="[
    ['title' => 'Accueil', 'href' => 'home'],
    ['title' => 'Tous les Services', 'href' => 'services'],
    ['title' => 'Nos Réalisations', 'href' => 'realisations'],
    ['title' => 'JD Travaux Services', 'href' => 'presentation'],
    ['title' => 'Nos Marques', 'href' => 'marques'],
    ['title' => 'Zones d’interventions', 'href' => 'zone-interventions'],
    ['title' => 'Contact', 'href' => 'contact'],
    ]"
    />
</header>

<main>
    @yield('content')
</main>
<!-- Inclusion du composant Footer -->
@include('components.footer')
<!-- Stack pour ajouter des scripts spécifiques -->
@stack('scripts')

</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let lazyImages = document.querySelectorAll("img.lazy");
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove("lazy");
                    observer.unobserve(img);
                }
            });
        });
        lazyImages.forEach(img => {
            observer.observe(img);
        });
    });
</script>
