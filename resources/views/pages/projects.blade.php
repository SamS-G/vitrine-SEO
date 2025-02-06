@extends('layouts.app')

@php
    $categories = [
    'fenetres' => [
        'name' => 'Fenêtres',
        'photos' => [
            ['image' => 'images/fenetre1.jpg', 'location' => 'Lyon', 'description' => 'Installation de fenêtres modernes.'],
            ['image' => 'images/fenetre2.jpg', 'location' => 'Marseille', 'description' => 'Remplacement de fenêtres anciennes.'],
        ],
    ],
    'portes' => [
        'name' => 'Portes',
        'photos' => [
            ['image' => 'images/porte1.jpg', 'location' => 'Paris', 'description' => 'Pose de portes d\'entrée sécurisées.'],
            ['image' => 'images/porte2.jpg', 'location' => 'Nice', 'description' => 'Installation de portes intérieures élégantes.'],
        ],
    ],
];

@endphp
<x-photo-gallery
:categories="$categories"
/>
