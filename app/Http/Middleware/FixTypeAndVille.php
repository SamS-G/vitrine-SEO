<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FixTypeAndVille
{
    /**
     * Méthode qui intercepte la requête avant qu'elle n'atteigne le contrôleur.
     *
     * @param Request $request L'objet de requête HTTP en cours
     * @param Closure $next La requête suivante dans le pipeline
     * @return mixed La réponse de la requête après modification
     */
    public function handle(Request $request, Closure $next)
    {
        // Définition d'une regex pour capturer correctement `{type}` et `{ville}`
        $regex = '/^(pose-portes-garage|pose-revetements-sol|pose-fenetres|pose-portes|pose-portails|pose-volets|pose-moustiquaires|depannage-volets|travaux-batiment)-(.+)$/';

        // Récupération des paramètres actuels de la route
        $type = $request->route('type');
        $ville = $request->route('ville');

        // Vérification avec `preg_match()` pour s'assurer que `{type}` et `{ville}` sont bien capturés
        if (preg_match($regex, "$type-$ville", $matches)) {
            // Si la regex trouve un match, on met à jour les valeurs des paramètres
            $request->route()->setParameter('type', $matches[1]); // Capture complète du `{type}`
            $request->route()->setParameter('ville', $matches[2]); // Capture correcte de `{ville}`
        } else {
            // Si la regex ne correspond pas, on renvoie une erreur 404
            abort(404);
        }

        // On continue la requête vers le contrôleur
        return $next($request);
    }
}
