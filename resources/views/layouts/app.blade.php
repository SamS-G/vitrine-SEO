<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title', 'Jd Travaux Services')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/images/favicon_io/site.webmanifest') }}">
    <!-- ✅ Préchargement des polices -->
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Baloo/Baloo-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Playwrite_GB_S/PlaywriteGBS-VariableFont_wght.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">

    {{--  Image lourde du header/hero --}}
    @if(request()->is('/'))
        <link rel="preload" fetchpriority="high" as="image" href="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/redHouse.webp') : Vite::asset('resources/images/home/redHouse.webp') }}" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/logo_small.webp') : Vite::asset('resources/images/logo_small.webp') }}" type="image/webp">
    @endif

    <!-- ✅ Chargement différé de Bootstrap, FontAwesome et app.css -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

    <meta name="description" content="@yield('meta_description', "$base_meta_schema->meta_description")">

    <!-- ✅ Meta générique -->
    <script type="application/ld+json">
        {!! $base_meta_schema->meta_schema !!}
    </script>

    <!-- ✅ Meta service local -->
    @yield('local_meta_data')

    <!-- ✅ Stack pour les styles & scripts spécifiques -->
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
    ['title' => 'Mes Réalisations', 'href' => 'realisations'],
    ['title' => 'JD Travaux Services', 'href' => 'presentation'],
    ['title' => 'Mes Marques', 'href' => 'marques'],
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
