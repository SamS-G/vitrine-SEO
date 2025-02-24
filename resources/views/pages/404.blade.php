@extends('layouts.app')

@section('title', 'Page Introuvable')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen bg-gray-100 text-center m-5">
        <div class="col-6 mx-auto bg-white shadow-lg rounded-lg">
            <h1 class="font-bold bg-danger">404</h1>
            <h2 class="text-2xl font-semibold mt-2 text-gray-800">Oups ! Cette page est introuvable.</h2>
            <p class="mt-4 text-gray-600">
                Il semble que la page que vous recherchez n'existe pas ou a été déplacée.<br>
                Ne vous inquiétez pas, nous sommes là pour vous aider !
            </p>
            <div class="mt-6">
                <a href="{{ route('home') }}" class="px-6 pt-3 bg-blue-500 text-blue rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                    <em>Retour à l'accueil</em>
                </a>
            </div>
            <img src="{{ Vite::asset('resources/images/404.webp') }}" alt="Page introuvable" class="my-5 w-64 mx-auto rounded-3 ratio-3x2">
        </div>
    </div>
@endsection
