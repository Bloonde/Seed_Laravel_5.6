<?php

namespace App\Http\Middleware;

use App\Web;
use Closure;
// Este middleware obtiene el dominio desde el que se está haciendo la request y busca en la tabla de web la web asociada
// al dominio. El id de la web obtenida es metido en los inputs para que filtre siempre por esta web
class DefaultOrderById
{
    public function handle($request, Closure $next)
    {
        if(!$request->has('sort')) {
            $request->merge(['sort' => '-id']);
        }
        return $next($request);
    }
}
