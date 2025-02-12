<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class LocalServicesController extends Controller
{
    public function show(string $type, string $ville): View|Factory|Application
    {
        $cities = file_get_contents(public_path('cities.data.json'));
        $communes = json_decode($cities, true);

        if (!isset($communes[$ville])) {
            abort(404, 'Pas de page trouvée avec cette URL, vérifiez l\'adresse saisie.');  // Si la ville n'est pas trouvée, renvoyer une erreur 404
        }

        if (isset($communes['services'])) {
            $services = $communes['services'];
        }
        $city = $communes[$ville];
        $meta_title = "Pose de Fenêtres à {$city['name']} - JD Travaux Services"
            ?? 'Pose de Fenêtres à Sainte-Julie - JD Travaux Services';
        $meta_description = "JD Travaux Services propose la pose de {$type} à {$city['name']}. Contactez-nous pour un devis sur-mesure."
            ?? 'JD Travaux Services propose la pose de volets / portes / fenêtres à Sainte-Julie. Contactez-nous pour un devis sur-mesure.';
        $default_meta_schema = view()->shared('base_meta_schema');

        try {
            $meta_schema = $this->mergeSchema($type, $city);

        } catch (Exception $exception) {
            $meta_schema = $default_meta_schema;

            return view("pages.services.local.{$type}", compact('meta_title', 'meta_description', 'meta_schema', 'city', 'type', 'services'));
        }

        if ($meta_schema) {
            $meta_schema = json_encode($meta_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            return view("pages.services.local.{$type}", compact('meta_title', 'meta_description', 'meta_schema', 'city', 'type', 'services'));
        }

        $meta_schema = $default_meta_schema;
        return view("pages.services.local.{$type}", compact('meta_title', 'meta_description', 'meta_schema', 'city', 'type', 'services'));
    }

    private function mergeSchema($type, $city): array
    {
        $template = file_get_contents(public_path('local.meta.schema.json')); //JSON
        // Remplacer les variables dans le template
        $filledSchema = str_replace(
            ['{$type}', '{$city[\'name\']}', '{$city[\'postalCode\']}', '{$city[\'latitude\']}', '{$city[\'longitude\']}'],
            [$type, $city['name'], $city['postalCode'], $city['latitude'], $city['longitude']],
            $template
        );
        // for URL property after $city['name'] & $type are filled
        $filledSchema = str_replace(
            "{/services/pose-{$type}-{$city['name']}}",
            url("/services/pose-{$type}-{$city['name']}"),
            $filledSchema
        );

        // Récupérer le schéma de base (partagé via le service provider)
        $base_schema = json_decode(view()->shared('base_meta_schema'), true); // ARRAY
        $local_schema = json_decode($filledSchema, true);// ARRAY

        return array_merge_recursive($base_schema, $local_schema);
    }
}
