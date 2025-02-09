<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jd Travaux Services')</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">
    <!-- Inclure les fichiers générés par Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="application/ld+json">
        {
"@context": "https://schema.org",
"@type": "HomeAndConstructionBusiness",
"name": "Nom de votre entreprise",
"image": "URL-de-votre-logo.jpg",
"description": "Entreprise spécialisée dans la pose et le dépannage de volets roulants et moustiquaires, l'installation de portes et portails, fenêtres et baies vitrées. Service professionnel et intervention rapide.",
"@id": "URL-de-votre-site#organization",
"url": "URL-de-votre-site",
"telephone": "Votre-numéro",
"priceRange": "€€",
"address": {
"@type": "PostalAddress",
"streetAddress": "Votre adresse",
"addressLocality": "Votre ville",
"postalCode": "Code postal",
"addressCountry": "FR"
},
"geo": {
"@type": "GeoCoordinates",
"latitude": "Votre latitude",
"longitude": "Votre longitude"
},
"openingHoursSpecification": [
{
  "@type": "OpeningHoursSpecification",
  "dayOfWeek": [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday"
  ],
  "opens": "08:00",
  "closes": "18:00"
}
],
"hasOfferCatalog": {
"@type": "OfferCatalog",
"name": "Services de menuiserie et dépannage",
"itemListElement": [
  {
    "@type": "OfferCatalog",
    "name": "Installation et dépannage de volets",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Pose de volets roulants",
          "description": "Installation professionnelle de volets roulants"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Dépannage de volets roulants",
          "description": "Service de réparation et dépannage urgent de volets roulants"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Installation de volets en bois",
          "description": "Pose de volets traditionnels en bois"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Installation de volets en PVC",
          "description": "Pose de volets en PVC"
        }
      }
    ]
  },
  {
    "@type": "OfferCatalog",
    "name": "Menuiseries",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Pose de portes",
          "description": "Installation de portes d'entrée et intérieures"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Installation de fenêtres",
          "description": "Pose de fenêtres en bois ou PVC"
        }
      }
    ]
  }
]
},
"areaServed": {
"@type": "GeoCircle",
"geoMidpoint": {
  "@type": "GeoCoordinates",
  "latitude": "Votre latitude",
  "longitude": "Votre longitude"
},
"geoRadius": "30000"
}
}
    </script>
    <!-- Stack pour ajouter des styles spécifiques à chaque page -->
    @stack('styles')
</head>

<body>

@if(request()->is('/'))
    <x-topBanner />
@endif

<header class="container-fluid">
    <x-navbar
    :navItems="[
    ['title' => 'Accueil', 'href' => 'home'],
    ['title' => 'Services', 'href' => 'services.index'],
    ['title' => 'Réalisations', 'href' => 'project'],
    ['title' => 'JD Travaux Services', 'href' => 'presentation'],
    ['title' => 'Marques', 'href' => 'home'],
    ['title' => 'Contact', 'href' => 'home'],
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
