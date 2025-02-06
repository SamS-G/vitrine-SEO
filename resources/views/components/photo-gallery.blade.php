<div class="container my-5">
    <h2 class="text-center mb-4">Galerie de Réalisations</h2>

    <!-- Catégories -->
    <ul class="nav nav-pills justify-content-center mb-4" id="categoryTabs" role="tablist">
        @foreach($categories as $key => $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link @if($loop->first) active @endif" id="tab-{{ $key }}" data-bs-toggle="pill" data-bs-target="#category-{{ $key }}" type="button" role="tab">
                    {{ $category['name'] }}
                </button>
            </li>
        @endforeach
    </ul>

    <!-- Galerie d'images -->
    <div class="tab-content" id="categoryTabsContent">
        @foreach($categories as $key => $category)
            <div class="tab-pane fade @if($loop->first) show active @endif" id="category-{{ $key }}" role="tabpanel">
                <div class="row g-3">
                    @foreach($category['photos'] as $photo)
                        <div class="col-md-4">
                            <div class="card photo-card position-relative overflow-hidden">
                                <img src="{{ asset($photo['image']) }}" class="card-img" alt="{{ $photo['description'] }}">
                                <div class="photo-overlay d-flex flex-column justify-content-center align-items-center text-center">
                                    <h5 class="text-white fw-bold">{{ $photo['location'] }}</h5>
                                    <p class="text-white small">{{ $photo['description'] }}</p>
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
        .photo-card {
            cursor: pointer;
            transition: transform 0.3s ease;
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
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-card:hover .photo-overlay {
            opacity: 1;
        }
    </style>
@endpush
