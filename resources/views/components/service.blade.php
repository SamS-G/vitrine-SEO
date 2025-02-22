<div class="col-10 mx-auto py-5">
    {{-- Titre du service --}}
    <h1 class="text-center mb-4 bg-white-soft">{{ $title }}</h1>

    {{-- Section Description avec Avantages --}}
    <div class="row mb-5">
        <div class="col-md-8">
            <p>{{ $description }}</p>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                @foreach ($advantages as $advantage)
                    <li class="list-group-item"><i class="fa-solid fa-check text-success"></i> {{ $advantage }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Section Galerie Avant/Après --}}
    <div class="gallery mb-5">
        <h2 class="text-center mb-4 bg-white-soft">Exemple avant / après</h2>
        <div class="row">
            @foreach ($gallery as $image)
                <div class="col-md-6 mb-3 text-center">
                    <img src="{{ Vite::asset('resources/images/services/') . $image }}" class="img-fluid rounded shadow"
                         alt="Avant / Après">
                </div>
            @endforeach
        </div>
    </div>

    {{-- Section FAQ --}}
    <div class="faq mb-5">
        <h2 class="text-center mb-4 bg-white-soft">Foire aux questions</h2>
        <div class="accordion" id="faqAccordion">
            @foreach ($faq as $index => $question)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                            {{ $question['question'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                         aria-labelledby="heading{{ $index }}"
                         data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $question['answer'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Bouton Demander un Devis --}}
    <div class="text-center">
        <a href="{{ url('contact') }}" class="btn btn-md service-button">
            <i class="fa-solid fa-envelope ms-2"></i> Demander un devis
        </a>
    </div>
</div>
