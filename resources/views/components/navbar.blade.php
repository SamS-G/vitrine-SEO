@props(['navItems'])

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid navbar-container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-fill justify-content-evenly mb-2 mb-lg-0">
                @foreach($navItems as $navItem)
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == $navItem['href'] ? 'active' : '' }}" aria-current="page" href="{{ route($navItem['href']) }}">{{ $navItem['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
