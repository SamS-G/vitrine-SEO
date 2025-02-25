@php use Carbon\Carbon; @endphp
@props(['reviews'])

<div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicateurs -->
    <div class="carousel-indicators">
        @foreach ($reviews['reviews'] as $index => $review)
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}"></button>
        @endforeach
    </div>

    <!-- Témoignages -->
    <div class="carousel-inner">
        @foreach ($reviews['reviews'] as $index => $review)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="testimonial text-center p-4 bg-light rounded shadow">
                    <img src="{{ $review['authorAttribution']['photoUri'] ?? 'https://via.placeholder.com/80' }}"
                         alt="Photo de {{ $review['authorAttribution']['displayName'] }}"
                         class="rounded-circle mb-3 img-fluid ratio-1x1"
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
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>

@push('styles')
    <style>
        .testimonial {
            max-width: 600px;
            margin: auto;
        }
        .stars {
            font-size: 1.2rem;
        }
    </style>
@endpush
