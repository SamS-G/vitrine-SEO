<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'slug' => 'pose-fenetres',
                'name' => 'Pose de Fenêtres',
                'variations' => json_encode([
                    "service-1" => "Pose de fenêtres et volets près de ",
                    "service-2" => "Services de dépannage à proximité de ",
                    "service-3" => "Menuiserie près de "
                ])
            ],
            [
                'slug' => 'pose-portes',
                'name' => 'Pose de Portes',
                'variations' => json_encode([
                    "service-1" => "Pose de portes de garage sectionnelles, basculantes ou enroulables dans les environs de ",
                    "service-2" => "Installation de portes d'entrée sécurisées et design à proximité de ",
                    "service-3" => "Remplacement et réparation de portes existantes à côté de "
                ])
            ],
            [
                'slug' => 'pose-volets',
                'name' => 'Pose de Volets',
                'variations' => json_encode([
                    "service-1" => "Pose de volets roulants électriques ou solaires dans les environs de ",
                    "service-2" => "Installation de volets classiques et design à proximité de ",
                    "service-3" => "Remplacement et réparation de volets existants à côté de "
                ])
            ]
        ]);
    }
}
