<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
{
    public function run(): void
    {
        City::insert([
            [
                'slug' => 'amberieu-en-bugey',
                'name' => 'Ambérieu-en-Bugey',
                'postal_code' => '01500',
                'latitude' => 45.9601,
                'longitude' => 5.3578,
                'landmarks' => json_encode([
                    'place-1' => "Maison des Sociétés",
                    'place-2' => "Gare d'Ambérieu",
                    'place-3' => "Château des Allymes"
                ])
            ],
            [
                'slug' => 'meximieux',
                'name' => 'Meximieux',
                'postal_code' => '01800',
                'latitude' => 45.905,
                'longitude' => 5.235,
                'landmarks' => json_encode([
                    'place-1' => "Porte de l'Horloge",
                    'place-2' => "Gare de Meximieux - Pérouges",
                    'place-3' => "Pérouges"
                ])
            ],
            [
                'slug' => 'lagnieu',
                'name' => 'Lagnieu',
                'postal_code' => '01150',
                'latitude' => 45.885,
                'longitude' => 5.348,
                'landmarks' => json_encode([
                    'place-1' => "Parc Industriel de la Plaine de l'Ain",
                    'place-2' => "Église Saint-Jean-Baptiste",
                    'place-3' => "Base de Loisirs de la Vallée Bleue"
                ])
            ],
            [
                'slug' => 'sainte-julie',
                'name' => 'Sainte-Julie',
                'postal_code' => '01150',
                'latitude' => 45.889,
                'longitude' => 5.280,
                'landmarks' => json_encode([
                    'place-1' => "Le Trolliet",
                    'place-2' => "La Chèvre Verte",
                    'place-3' => "Le Mas-du-Puit"
                ])
            ]
        ]);
    }
}
