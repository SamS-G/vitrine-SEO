<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MetaSchema;
use App\Models\Service;
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
        // 🔹 Vérification et récupération des données (avec gestion d'erreurs)
        $city = City::where('slug', $ville)->first();

        if (is_null($city)) {
            abort(404, "La ville ($ville) demandée n'existe pas.");
        }
        // 🔹 Vérifier si le service existe (gère les exceptions pose- et non pose-)
        $service = Service::where('slug', $type)->first();


        // Si pas trouvé de service, on retourne une 404
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
        return view("pages.services.local.{$type}", compact('service', 'city', 'meta_data'));
    }

    public function showCityServices($ville): View|Application|Factory|Response
    {
        $services = Service::select('slug', 'name', 'description')->where('slug', '!=', 'base')->get();

        if (!$services) {
            return response()->view('errors.service-not-found', [
                'message' => 'La liste des Services pour cette ville n\'a pas été trouvé !',
                'meta_title' => 'Liste services pour cette ville non trouvés',
                'meta_description' => 'Aucune information disponible pour cette ville',
            ], 404);
        }

        // Ajout de l'uri locale
        $services->map(function ($service) use ($ville) {
            $service->setAttribute('url', url("services/{$service->slug}-{$ville}"));
        });

        return view('pages.services.local.prestations.index', compact('services', 'ville'));
    }
}
