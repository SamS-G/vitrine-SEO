<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title', 'Jd Travaux Services')</title>
    @yield('url')

    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ Vite::asset('resources/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ Vite::asset('resources/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ Vite::asset('resources/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/images/favicon_io/site.webmanifest') }}">
    <!-- ✅ Préchargement des polices -->
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Baloo/Baloo-Regular.woff2') }}" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/Playwrite_GB_S/PlaywriteGBS-VariableFont_wght.woff2') }}"
          as="font" type="font/woff2" crossorigin="anonymous">

    {{--  Image lourde du header/hero --}}
    @if(request()->is('/'))
        <link rel="preload" fetchpriority="high" as="image"
              href="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/home/redHouse.webp') : Vite::asset('resources/images/home/redHouse.webp') }}"
              type="image/webp">
        <link rel="preload" fetchpriority="high" as="image"
              href="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/logo_small.webp') : Vite::asset('resources/images/logo_small.webp') }}"
              type="image/webp">
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
{{--    Balise OpenGraph--}}
    <meta property="og:type" content="article">
    <meta property="og:title" content="My first article">
    <meta property="og:description" content="This is a very cool article.">
    <meta property="og:site_name" content="JD Travaux Services">
    <meta property="og:url" content="https://jdtravauxservices.fr">
    <meta property="og:image" content="https://jdtravauxservices.fr/logo.webp">
    <meta property="og:image:type" content="image/webp" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="281" />
    <meta property="og:image:alt" content="Logo JD travaux Services" />
</head>

<body>

@if(request()->is('/'))
    <x-topBanner/>
@endif

<header>
    <x-navbar
        :navItems="$siteData['app']['navItems']"
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
