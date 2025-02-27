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
                'meta_schema_variations_name' => json_encode([]),
                'description' => '',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-fenetres',
                'name' => 'Pose de Fenêtres',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "la pose de fenêtres et volets",
                    "service-2" => "services de dépannage ",
                    "service-3" => "menuiseries "
                ]),
                'description' => 'Installation et rénovation de fenêtres pour une meilleure isolation.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-portes',
                'name' => 'Pose de Portes',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "la pose de portes de garage sectionnelles, basculantes ou enroulables ",
                    "service-2" => "installation de portes d'entrée sécurisées et design ",
                    "service-3" => "remplacement et réparation de portes existantes "
                ]),
                'description' => 'Installation de portes intérieures et extérieures adaptées à vos besoins.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-portes-garage',
                'name' => 'Pose de Portes de Garage',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "la pose de portes de garage sectionnelles, basculantes ou enroulables ",
                    "service-2" => "installation de portes de garage sécurisées et design ",
                    "service-3" => "remplacement et réparation de portes de garage existantes "
                ]),
                'description' => 'Pose de portes de garage battantes, sectionnelles ou enroulables.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-portails',
                'name' => 'Pose de Portails',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "la pose de portails en PVC, acier ou ferronnerie ",
                    "service-2" => "installation de portails à ouverture électrique ",
                    "service-3" => "remplacement et réparation de portails existants ",
                ]),
                'description' => 'Installation de portails sécurisés et esthétiques pour votre maison.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-volets',
                'name' => 'Pose de Volets',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "la pose de volets traditionnels ou enroulants ",
                    "service-2" => "installation de volets électriques ou solaires ",
                    "service-3" => "remplacement ou réparation de volets en bois "
                ]),
                'description' => 'Installation de volets roulants, battants et motorisés.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-revetements-sol',
                'name' => 'Pose de revêtement de sol',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "de pose de parquet en bois ",
                    "service-2" => "de pose de carrelage ",
                    "service-3" => "de pose de lino "
                ]),
                'description' => 'Pose de revêtements de sol (parquet, carrelage, lino) pour un intérieur élégant.',
                'created_at' => now(),
            ],
            [
                'slug' => 'pose-moustiquaires',
                'name' => 'Pose de moustiquaires',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "de pose de moustiquaires ",
                    "service-2" => "de pose de moustiquaires enroulables ",
                    "service-3" => "de pose de moustiquaires coulissantes "
                ]),
                'description' => 'Pose de moustiquaires sur-mesure pour une protection efficace.',
                'created_at' => now(),
            ],
            [
                'slug' => 'depannage-volets',
                'name' => 'Dépannage de volets',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "un dépannage express de volets roulants ",
                    "service-2" => "urgence volets roulants ",
                    "service-3" => "réparation de vitres cassées, de mécanismes d'ouverture et de joints "
                ]),
                'description' => 'Dépannage rapide et efficace de volets roulants bloqués ou endommagés.',
                'created_at' => now(),
            ],
            [
                'slug' => 'travaux-batiment',
                'name' => 'Travaux en Bâtiment',
                'meta_schema_variations_name' => json_encode([
                    "service-1" => "des travaux de rénovation tous corps d'état ",
                    "service-2" => "petits travaux et bricolage ",
                    "service-3" => "maintenance et entretien de bâtiments "
                ]),
                'description' => 'Travaux de rénovation et aménagement intérieur/extérieur.',
                'created_at' => now(),
            ]
        ]);
    }
}
