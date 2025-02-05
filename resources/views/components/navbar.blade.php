@props(['navItems'])

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid navbar-container">
        <a class="navbar-brand fw-bold" href="#"><img src="{{ Vite::asset('resources/images/logo_small.webp') }}" alt="logo" title="logo de JdTravauxServices" class="w-75"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-fill justify-content-evenly mb-2 mb-lg-0">
                @foreach($navItems as $navItem)
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route($navItem['href']) }}">{{ $navItem['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<div class="separator-nav"></div>
