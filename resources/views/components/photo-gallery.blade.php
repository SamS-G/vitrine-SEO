<div class="container my-5 position-relative">
{{--Toast message--}}
    <div class=" container toast show my-5 position-absolute end-5 p-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header d-flex justify-content-between">
            <img src="{{ Vite::asset('resources/images/logo_small.webp') }}" class="rounded me-2 w-25" alt="logo jd travaux services">
            <strong>Astuce</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Cliquez ou survolez une image pour en savoir plus
        </div>
    </div>
    <!-- Catégories -->
    <ul class="nav nav-pills mb-3" id="categoryTabs" role="tablist">
        @foreach($categories as $key => $category)
            <li class="nav-item mb-4" role="presentation">
                <button class="nav-link gallery-button @if($loop->first) active @endif" id="tab-{{ $key }}"
                        data-bs-toggle="pill" data-bs-target="#category-{{ $key }}" type="button" role="tab">
                    {{ $category['name'] }}
                </button>
            </li>
        @endforeach
    </ul>

    <!-- Galerie d'images -->
    <div class="tab-content" id="categoryTabsContent">
        @foreach($categories as $key => $category)
            <div class="tab-pane fade @if($loop->first) show active @endif" id="category-{{ $key }}" role="tabpanel">
                <div class="row g-3 justify-content-center">
                    @foreach($category['photos'] as $photo)
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="card photo-card position-relative overflow-hidden">
                                <img src="{{ Vite::asset('resources/images/') . $photo['image'] }}"
                                     class="img-fluid w-100 h-100 object-fit-cover"
                                     alt="Photo de {{ $photo['location'] }}">
                                <div class="photo-overlay d-flex flex-column justify-content-center p-2">
                                    <h5 class="text-white fw-bold text-center">{{ $photo['location'] }}</h5>
                                    {!! $photo['description'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('styles')
    <style>
        .toast {
        z-index: 999;
        }

        #categoryTabs .nav-link {
            border: 1px solid #1B000A;
            text-transform: uppercase;
            box-shadow: 0 4px 4px #1B000A;
        }

        #categoryTabs .nav-link:not(.nav-link.active) {
            color: #5a5b58 !important;
            border: 1px solid black;
            text-shadow: 1px 1px 1px #5a5b58 !important;
        }

        .gallery-button {
            font-size: 1rem;
        }

        .gallery-button.active {
            background-color: #C14444!important;
            border-color: #A93939!important;
        }
        .gallery-button:hover:not(.gallery-button.active) {
            scale: 1.05;
        }

        .photo-overlay p, ul {
            color: white !important;
            text-align: justify;
        }

        ul {
            list-style: none;
        }

        .photo-card {
            height: 50vh;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .photo-card img {
            transition: transform 0.3s ease-in-out;
        }

        .photo-card:hover {
            transform: scale(1.05);
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .photo-card:hover .photo-overlay {
            opacity: 1;
        }

        .card p, ul {
            font-size: 0.8rem !important;
        }
    </style>
@endpush
