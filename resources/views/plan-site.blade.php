@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="bg-white-soft">Plan du site</h1>
        <p>Retrouvez ici toutes les pages importantes de notre site :</p>

        <h2 class="mb-4">Pages principales</h2>
        <ul>
            @foreach ($pages as $page)
                <li><a href="{{ $page['url'] }}">{{ $page['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
