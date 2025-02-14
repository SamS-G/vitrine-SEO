<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jd Travaux Services')</title>
    <meta name="description"
          content="{{ $meta_description ?? 'JD Travaux Services est spécialisé dans la pose de fenêtres, portes et volets dans la région de la Plaine de l\'Ain.' }}">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">
    <!-- Inclure les fichiers générés par Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Meta générique uniquement --}}
    <script type="application/ld+json">
        {!! $meta_schema ?? $base_meta_schema !!}
    </script>

    <!-- Stack pour ajouter des styles spécifiques à chaque page -->
    @stack('styles')
</head>

<body>

@if(request()->is('/'))
    <x-topBanner/>
@endif

<header class="container-fluid">
    <x-navbar
        :navItems="[
    ['title' => 'Accueil', 'href' => ''],
    ['title' => 'Services', 'href' => 'services'],
    ['title' => 'Réalisations', 'href' => 'realisations'],
    ['title' => 'JD Travaux Services', 'href' => 'presentation-jdtravauxservices'],
    ['title' => 'Marques', 'href' => 'nos-marques'],
    ['title' => 'Zones d’interventions', 'href' => 'zone-interventions'],
    ['title' => 'Contact', 'href' => 'contact'],
    ]"
    />
</header>

<main class="container-fluid">
    @yield('content')
</main>
<!-- Inclusion du composant Footer -->
@include('components.footer')
<!-- Stack pour ajouter des scripts spécifiques -->
@stack('scripts')

</body>
</html>
