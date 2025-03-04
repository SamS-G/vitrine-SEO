@push('styles')
    <style>
        .card {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card .text-center {
            margin-top: auto;
        }

    </style>
@endpush

<div class="card">
    <figure role="figure" aria-label="{{ $figcaption ?? "" }}">
    <img
        class="img-fluid {{ $imgClass }}"
        src="{{ $src }}"
        alt="{{ $title }}"
        loading="lazy"
        width="{{ $width }}"
        height="{{ $height }}">
    <figcaption class="text-muted text-center fs-6"><small><em>{{ $figcaption }}</em></small></figcaption>
    </figure>
    <h4 class="text-center h3">{{ $title }}</h4>
    <p class="text-center">{{ $text }}</p>
    <div class="text-center">
        <x-button
            iconClass="{{ $iconClass }}"
            link="{{ url($link) }}"
            linkClass="{{ $linkClass }}"
            buttonName="{!! html_entity_decode($buttonName) !!}"
        />
    </div>
</div>
