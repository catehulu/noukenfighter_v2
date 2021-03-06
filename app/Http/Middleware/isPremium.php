<?php

namespace App\Http\Middleware;

use Closure;

class isPremium
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
        if (Auth::user() && Auth::user()->status == 1) {
            # code...
            return $next($request);
        }
        return redirect('/home');
    }
}
