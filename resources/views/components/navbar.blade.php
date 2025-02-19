@props(['navItems'])

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid navbar-container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
