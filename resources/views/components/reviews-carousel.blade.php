@php use Carbon\Carbon; @endphp
@props(['reviews'])
@push('styles')
    <style>
        .stars {
            font-size: 1.2rem;
        }
    </style>
@endpush

<div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicateurs -->
    <div class="carousel-indicators">
        @foreach ($reviews['reviews'] as $index => $review)
            <button type="button" aria-label="bouton de défilement des images" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}"></button>
        @endforeach
    </div>

    <!-- Témoignages -->
    <div class="carousel-inner">
        @foreach ($reviews['reviews'] as $index => $review)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="container testimonial text-center p-4 bg-light rounded shadow">
                    <img src="{{ $review['authorAttribution']['photoUri'] ?? 'https://via.placeholder.com/80' }}"
                         alt="Photo de {{ $review['authorAttribution']['displayName'] }}"
                         loading="lazy"
                         class="rounded-circle mb-3 img-fluid"
                         width="128"
                         height="128"
                         >
                    <h5 class="pb-3">{{ $review['authorAttribution']['displayName'] }}</h5>
                    <small><em>{{ Carbon::parse($review['publishTime'])->locale('fr')->translatedFormat('j F Y') }}</em></small>
                    <p class="text-muted pt-3">{{ $review['originalText']['text'] }}</p>
                    <div class="stars">
                        @php
                            $rating = round($review['rating']);
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            <span
                                class="star {{ $i <= $rating ? 'text-warning' : 'text-secondary' }}">&#9733;</span>
                        @endfor
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Boutons de navigation -->
    <button class="carousel-control-prev" type="button" aria-label="défilement vers la gauche" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="carousel-control-next" type="button" aria-label="défilement vers la droite" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>
@push('scripts')
    <script>
        function uniformizeHeights() {
            let maxHeight = 0;
            document.querySelectorAll(".testimonial").forEach(el => {
                el.style.height = "auto"; // Réinitialiser avant de recalculer
                maxHeight = Math.max(maxHeight, el.offsetHeight);
            });
            document.querySelectorAll(".testimonial").forEach(el => {
                el.style.height = maxHeight + "px"; // Appliquer la plus grande hauteur
            });
        }

        // Exécuter au chargement et après chaque changement de slide
        document.addEventListener("DOMContentLoaded", uniformizeHeights);
        window.addEventListener("resize", uniformizeHeights);
    </script>
@endpush
