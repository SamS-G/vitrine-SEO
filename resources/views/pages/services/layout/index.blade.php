@extends('layouts.app')
@section('title', 'Services - JdServices')

@section('content')
    <div class="col-10 mx-auto my-5">
        <h1 class="text-center mb-5 services-title">Nos Services</h1>
        <div class="container pb-5">
            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consequuntur eum iusto necessitatibus perspiciatis quam quas vel. Aliquam asperiores harum, ipsum libero minus quo recusandae sapiente sequi sunt tenetur.</span>
                <span>Animi blanditiis delectus dignissimos dolorum, eaque earum harum id ipsa magnam molestias non, nostrum pariatur placeat praesentium quasi, repellat tenetur voluptatibus! Ducimus labore neque nesciunt numquam? Dolore ea illo vero.</span>
            </p>
        </div>
        <div class="row">
            @php
                $services = [
                    ['title' => 'Pose de fenêtres', 'route' => 'services.window', 'image' => 'vitre.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'   ],
                    ['title' => 'Pose de volets roulants', 'route' => 'services.shutter', 'image' => 'volet.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Pose de portes d’entrée', 'route' => 'services.door', 'image' => 'porte-entree.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Pose de portes de garage', 'route' => 'services.garageDoor', 'image' => 'porte-garage.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Pose de portails', 'route' => 'services.gate', 'image' => 'portail.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Pose de parquet et revêtements de sol', 'route' => 'services.flooring', 'image' => 'parquet.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Dépannage de volets roulants', 'route' => 'services.depannage', 'image' => 'reparation.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                    ['title' => 'Multi Services', 'route' => 'services.multiservice', 'image' => 'multi-service.webp', 'text' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate, explicabo ipsum magni odio perferendis rerum sunt tenetur. Aliquam dolorum ea, esse et fuga neque odio possimus quas quia voluptatum!'],
                ];
            @endphp
            @foreach ($services as $service)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ Vite::asset("resources/images/services/") . $service['image'] }}" class="img-fluid rounded-start"
                                     alt="{{ $service['title'] }}">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body service-card-body">
                                    <h5 class="card-title h4">{{ $service['title'] }}</h5>
                                    <p class="card-text service-card-text text-justify">{{ $service['text'] }}</p>
                                    <a href="{{ route($service['route']) }}" class="btn btn-md service-button">Découvrir <i class="fa-solid fa-arrow-right fa-beat"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
