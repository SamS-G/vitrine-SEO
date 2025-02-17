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
                'slug' => 'base',
                'name' => 'Service générique utilisé pour les meta_data globales du site',
                'variations' => json_encode([

                ])
            ],
            [
                'slug' => 'pose-fenetres',
                'name' => 'Pose de Fenêtres',
                'variations' => json_encode([
                    "service-1" => "la pose de fenêtres et volets",
                    "service-2" => "services de dépannage ",
                    "service-3" => "menuiseries "
                ])
            ],
            [
                'slug' => 'pose-portes',
                'name' => 'Pose de Portes',
                'variations' => json_encode([
                    "service-1" => "la pose de portes de garage sectionnelles, basculantes ou enroulables ",
                    "service-2" => "installation de portes d'entrée sécurisées et design ",
                    "service-3" => "remplacement et réparation de portes existantes "
                ])
            ],
            [
                'slug' => 'pose-portes-garage',
                'name' => 'Pose de Portes de Garage',
                'variations' => json_encode([
                    "service-1" => "la pose de portes de garage sectionnelles, basculantes ou enroulables ",
                    "service-2" => "installation de portes de garage sécurisées et design ",
                    "service-3" => "remplacement et réparation de portes de garage existantes "
                ])
            ],
            [
                'slug' => 'pose-portails',
                'name' => 'Pose de Portails',
                'variations' => json_encode([
                    "service-1" => "la pose de portails en PVC, acier ou ferronnerie ",
                    "service-2" => "installation de portails à ouverture électrique ",
                    "service-3" => "remplacement et réparation de portails existants ",
                ])
            ],
            [
                'slug' => 'pose-volets',
                'name' => 'Pose de Volets',
                'variations' => json_encode([
                    "service-1" => "la pose de volets traditionnels ou enroulants ",
                    "service-2" => "installation de volets électriques ou solaires ",
                    "service-3" => "remplacement ou réparation de volets en bois "
                ])
            ],
            [
                'slug' => 'pose-revêtements-sol',
                'name' => 'Pose de revêtement de sol',
                'variations' => json_encode([
                    "service-1" => "de pose de parquet en bois ",
                    "service-2" => "de pose de carrelage ",
                    "service-3" => "de pose de lino "
                ])
            ],
            [
                'slug' => 'pose-moustiquaires',
                'name' => 'Pose de moustiquaires',
                'variations' => json_encode([
                    "service-1" => "de pose de moustiquaires ",
                    "service-2" => "de pose de moustiquaires enroulables ",
                    "service-3" => "de pose de moustiquaires coulissantes "
                ])
            ],
            [
                'slug' => 'depannage-volets',
                'name' => 'Dépannage de volets',
                'variations' => json_encode([
                    "service-1" => "un dépannage express de volets roulants ",
                    "service-2" => "urgence volets roulants ",
                    "service-3" => "réparation de vitres cassées, de mécanismes d'ouverture et de joints "
                ])
            ],
            [
                'slug' => 'travaux-batiment',
                'name' => 'Travaux en Bâtiment',
                'variations' => json_encode([
                    "service-1" => "des travaux de rénovation tous corps d'état ",
                    "service-2" => "petits travaux et bricolage ",
                    "service-3" => "maintenance et entretien de bâtiments "
                ])
            ]
        ]);
    }
}
