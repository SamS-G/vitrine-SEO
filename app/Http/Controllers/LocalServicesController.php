<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MetaSchema;
use App\Models\Service;
use FilesystemIterator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LocalServicesController extends Controller
{
    public function showService($type, $ville): View|Application|Factory|Response
    {
        // 🔹 Définition du slug du service en fonction de l'URL
        $serviceType = Str::contains(URL::current(), 'pose-') ? "pose-$type" : $type;

        // 🔹 Vérification et récupération des données (avec gestion d'erreurs)
        $city = City::where('slug', $ville)->first();

        if (is_null($city)) {
            abort(404, "La ville ($ville) demandée n'existe pas.");
        }
        // 🔹 Vérifier si le service existe (gère les exceptions pose- et non pose-)
        $service = Service::where('slug', $serviceType)->first();

        // Si le service avec ce format n'existe pas, essayer avec `pose-`
        if (!$service && !Str::startsWith($serviceType, 'pose-')) {
            $serviceType = "pose-$type";
            $service = Service::where('slug', $serviceType)->first();
        }

        // Si toujours pas trouvé, on retourne une 404
        if (!$service) {
            abort(404, "Le service demandé n'est pas proposé :(");
        }

        // 🔹 Récupération des métadonnées
        $meta_data = MetaSchema::where('service_id', $service->id)
            ->where('city_id', $city->id)
            ->first();

        if (!$meta_data) {
            return response()->view('errors.service-not-found', [
                'message' => 'Service non disponible pour cette ville.',
                'meta_title' => 'Service non disponible',
                'meta_description' => 'Aucune information disponible pour cette combinaison service/ville',
            ], 404);
        }

        // 🔹 Retour de la vue avec les données
        return view("pages.services.local.{$serviceType}", compact('service', 'city', 'meta_data'));
    }

    public function showCityServices($ville): View|Application|Factory|Response
    {
        $directory = resource_path('views/pages/services/local');

        if (!is_dir($directory)) {
            abort(404, "Le répertoire [$directory] n'existe pas.");
        }
        $iterator = new FilesystemIterator($directory);
        $filenames = [];

        foreach ($iterator as $fileInfo) {
            if ($fileInfo->isFile()) {
                // Récupération du nom sans extension et avant le premier "."
                $filename = explode('.', pathinfo($fileInfo->getFilename(), PATHINFO_FILENAME))[0]; // [0] = first part only
                $filenames[] = $filename;
            }
        }
        // Génération des urls de pages locales
        $urls = array_map(fn($filename) => url("services/{$filename}-{$ville}"), $filenames);

        $titles = [
            'Pose de fenêtres',
            'Pose de moustiquaires',
            'Pose de portails',
            'Pose de portes de garage',
            'Pose de portes',
            'Pose de revêtements de sol',
            'Pose de volets',
            'Dépannage de volets roulants',
            'Travaux en bâtiment'
        ];
        // Descriptions SEO optimisées
        $descriptions = [
            'Installation et rénovation de fenêtres pour une meilleure isolation.',
            'Pose de moustiquaires sur-mesure pour une protection efficace.',
            'Installation de portails sécurisés et esthétiques pour votre maison.',
            'Pose de portes de garage battantes, sectionnelles ou enroulables.',
            'Installation de portes intérieures et extérieures adaptées à vos besoins.',
            'Pose de revêtements de sol (parquet, carrelage, lino) pour un intérieur élégant.',
            'Installation de volets roulants, battants et motorisés.',
            'Dépannage rapide et efficace de volets roulants bloqués ou endommagés.',
            'Travaux de rénovation et aménagement intérieur/extérieur.'
        ];

        $prestations = array_map(function ($title, $url, $description) {
            return compact('title', 'url', 'description');
        }, $titles, $urls, $descriptions);

        return view('pages.services.local.prestations.index', compact('prestations', 'ville'));
    }
}
