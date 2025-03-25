<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageSupprimeeMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $pagesSupprimees = [
            'photos-chantiers',
            'contactez-moi-pour-votre-devis-gratuit'
        ];

        if (in_array($request->path(), $pagesSupprimees)) {
            return \response('Cette page n\'existe plus !', 410);
        }
        return $next($request);
    }
}
