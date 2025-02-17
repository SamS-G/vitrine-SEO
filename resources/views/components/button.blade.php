<div class="{{ $container ?? 'container' }}">
    <a href="{{ $link ?? "#" }}" class="{{ "$linkClass text-uppercase" ?? "" }}">
       @if($iconClass)
            <i class="{{ $iconClass }}"></i> {{ $buttonName ?? 'My Button' }}
        @else
            {{ $buttonName ?? 'My Button' }}
       @endif
    </a>
</div>
