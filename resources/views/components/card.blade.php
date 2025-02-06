<div class="card">
    <img class="img-fluid" src="{{ $src }}" alt="Card image cap">
    <h4 class="text-center h3">{{ $title }}</h4>
    <p class="text-center">{{ $text }}</p>
    <div class="text-center">
        <x-button
            iconClass="{{ $iconClass }}"
            link="{{ route($link) }}"
            linkClass="{{ $linkClass }}"
            buttonName="{!! html_entity_decode($buttonName) !!}"
        />
    </div>
</div>
