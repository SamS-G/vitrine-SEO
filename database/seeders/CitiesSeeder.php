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
            ],
            [
                'slug' => 'dagneux',
                'name' => 'Dagneux',
                'postal_code' => '01120',
                'latitude' => 45.8475,
                'longitude' => 5.0561,
                'landmarks' => json_encode([
                    'place-1' => "Rue de Genève",
                    'place-2' => "Rue du Lavoir",
                    'place-3' => "Avenue de la Gare"
                ])
            ],
            [
                'slug' => 'leyment',
                'name' => 'Leyment',
                'postal_code' => '01150',
                'latitude' => 45.9,
                'longitude' => 5.3,
                'landmarks' => json_encode([
                    'place-1' => "Rue de la Mairie",
                    'place-2' => "Rue des Ecoles",
                    'place-3' => "Route de Chazey"
                ])
            ],
            [
                'slug' => 'beynost',
                'name' => 'Beynost',
                'postal_code' => '01700',
                'latitude' => 45.8333,
                'longitude' => 5.0167,
                'landmarks' => json_encode([
                    'place-1' => "Rue Centrale",
                    'place-2' => "Rue du Mollard",
                    'place-3' => "Avenue de la Gare"
                ])
            ],
            [
                'slug' => 'miribel',
                'name' => 'Miribel',
                'postal_code' => '01700',
                'latitude' => 45.8214,
                'longitude' => 4.955,
                'landmarks' => json_encode([
                    'place-1' => "Grande Rue",
                    'place-2' => "Rue des Ecoles",
                    'place-3' => "Avenue de la Gare"
                ])
            ],
            [
                'slug' => 'montluel',
                'name' => 'Montluel',
                'postal_code' => '01120',
                'latitude' => 45.85,
                'longitude' => 5.05,
                'landmarks' => json_encode([
                    'place-1' => "Rue Notre Dame",
                    'place-2' => "Rue de la Portelle",
                    'place-3' => "Avenue Pierre Cormorèche"
                ])
            ],
            [
                'slug' => 'tramoyes',
                'name' => 'Tramoyes',
                'postal_code' => '01390',
                'latitude' => 45.8833,
                'longitude' => 5.95,
                'landmarks' => json_encode([
                    'place-1' => "Rue du Centre",
                    'place-2' => "Rue des Ecoles",
                    'place-3' => "Route de Mionnay"
                ])
            ],
            [
                'slug' => 'perouges',
                'name' => 'Pérouges',
                'postal_code' => '01800',
                'latitude' => 45.9,
                'longitude' => 5.1833,
                'landmarks' => json_encode([
                    'place-1' => "Rue des Rondes",
                    'place-2' => "Rue du For",
                    'place-3' => "Route du Prince"
                ])
            ],
            [
                'slug' => 'charnoz-sur-ain',
                'name' => 'Charnoz-sur-Ain',
                'postal_code' => '01800',
                'latitude' => 45.8833,
                'longitude' => 5.2333,
                'landmarks' => json_encode([
                    'place-1' => "Rue de la Mairie",
                    'place-2' => "Rue des Ecoles",
                    'place-3' => "Route de Loyes"
                ])
            ],
            [
                'slug' => 'chazey-sur-ain',
                'name' => 'Chazey-sur-Ain',
                'postal_code' => '01150',
                'latitude' => 45.8833,
                'longitude' => 5.25,
                'landmarks' => json_encode([
                    'place-1' => "Rue du Château",
                    'place-2' => "Rue de la Mairie",
                    'place-3' => "Route de Leyment"
                ])
            ],
            [
                'slug' => 'villieu-loyes-mollon',
                'name' => 'Villieu-Loyes-Mollon',
                'postal_code' => '01800',
                'latitude' => 45.9167,
                'longitude' => 5.2167,
                'landmarks' => json_encode([
                    'place-1' => "Grande Rue",
                    'place-2' => "Rue de la Mairie",
                    'place-3' => "Route de Loyes"
                ])
            ],
            [
                'slug' => 'la-balme-les-grottes',
                'name' => 'La-Balme-Les-Grottes',
                'postal_code' => '38390',
                'latitude' => 45.85,
                'longitude' => 5.3333,
                'landmarks' => json_encode([
                    'place-1' => "Rue des Grottes",
                    'place-2' => "Rue de la Mairie",
                    'place-3' => "Route de Hières-sur-Amby"
                ])
            ],
            [
                'slug' => 'loyettes',
                'name' => 'Loyettes',
                'postal_code' => '01360',
                'latitude' => 45.766667,
                'longitude' => 5.200000,
                'landmarks' => json_encode([
                    'place-1' => "Rue de la Mairie",
                    'place-2' => "Rue du Rhône",
                    'place-3' => "Route de l'Eglise"
                ])
            ],
            [
                'slug' => 'saint-vulbas',
                'name' => 'Saint-Vulbas',
                'postal_code' => '01150',
                'latitude' => 45.833328,
                'longitude' => 5.28333,
                'landmarks' => json_encode([
                    'place-1' => "Rue de la Plaine",
                    'place-2' => "Rue du Bugey",
                    'place-3' => "Route des Ecoles"
                ])
            ],
            [
                'slug' => 'saint-andre-de-corcy',
                'name' => 'Saint-André-de-Corcy',
                'postal_code' => '01390',
                'latitude' => 45.9263,
                'longitude' => 4.9477,
                'landmarks' => json_encode([
                    'place-1' => "Le Bourg",
                    'place-2' => "Route de Civrieux",
                    'place-3' => "Route de Tramoyes"
                ])
            ],
            [
                'slug' => 'villars-les-dombes',
                'name' => 'Villars-les Dombes',
                'postal_code' => '01330',
                'latitude' => 45.9875,
                'longitude' => 5.0560,
                'landmarks' => json_encode([
                    'place-1' => "Rue de la Mairie",
                    'place-2' => "Rue du Parc",
                    'place-3' => "Rue Pasteur"
                ])
            ],
        ]);
    }
}
