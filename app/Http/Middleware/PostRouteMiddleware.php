<?php

namespace App\Http\Middleware;

use Closure;

class PostRouteMiddleware
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
        if(!$request->isMethod('post')){
            abort(404);
        }
        return $next($request);
    }
}
