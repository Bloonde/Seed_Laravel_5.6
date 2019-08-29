<?php

namespace App\Http\Middleware;

use Closure;
use Danvelcab\ProjectGenerator\Helpers\CodesHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class CheckAccountActivation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $field = $request->has('email') ? 'email' : 'username';
        $user = DB::table('users')
            ->where([
                [$field, $request->input($field)],
            ])
            ->first();
        if(!is_null($user) && !$user->activated){
            return response(Lang::get('httpResponses')[CodesHelper::NO_ACTIVATED_ACCOUNT], CodesHelper::NO_ACTIVATED_ACCOUNT);
        }
        return $next($request);
    }

}
