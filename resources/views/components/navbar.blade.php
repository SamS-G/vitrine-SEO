<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid navbar-container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/logo_small.webp') }}" alt="logo" title="logo de JdTravauxServices"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-fill justify-content-evenly mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('achievements') }}" >
                        Réalisations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jdtravaux') }}">A propos de JD Travaux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog/Conseils</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
