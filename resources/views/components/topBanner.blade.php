<div class="top-hero-container">
    <div class="top-hero-wrapper">
        <!-- Logo à gauche -->
        <a class="img-fluid hero-logo" href="{{ url('/') }}">
            <img
                src="{{ Agent::isMobile() ? Vite::asset('resources/images/responsive/logo_small.webp') : Vite::asset('resources/images/logo_small.webp') }}"
                alt="logo"
                title="logo de JdTravauxServices"
                width="150"
                height="140"
            >
        </a>
        <div class="contact-container">
            <div class="social-container">
                <ul>
                    <li><a href="https://www.facebook.com/JDTravauxServices" target="_blank" aria-label="vers la page Facebook de Jd travaux service">
                            <i class="fa-brands fa-xl fa-square-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/jdtravaux" target="_blank" aria-label="vers la page Instagram de Jd travaux service">
                            <i class="fa-brands fa-xl fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="mail-phone-wrapper">
                <a href="mailto:jdtravauxservices@gmail.com">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    jdtravauxservices@gmail.com
                </a>
                <a href="tel:0689442815">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    06.89.44.28.15
                </a>
            </div>
        </div>
        <!-- Titre centré -->
        <h2 class="h1-xl text-center">JD Travaux Services</h2>
    </div>
</div>

