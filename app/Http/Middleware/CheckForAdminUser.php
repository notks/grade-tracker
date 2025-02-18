<?php

namespace App\Http\Middleware;

use App\Http\Controllers\TestController;
use Closure;

class CheckForAdminUser
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
        if(Auth()->user()->role==='admin'){
            return redirect('adminhome');
        }else{
              return $next($request);
        }


    }
}
