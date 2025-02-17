<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MetaSchema;
use App\Models\Service;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LocalServicesController extends Controller
{
    public function showService($type, $ville)
    {
        // 🔹 Définition du slug du service en fonction de l'URL
        $serviceType = Str::contains(URL::current(), 'pose-') ? "pose-$type" : $type;

        // 🔹 Vérification et récupération des données (avec gestion d'erreurs)
        $city = City::where('slug', $ville)->firstOrFail();

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
}
