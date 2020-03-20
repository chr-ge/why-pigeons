<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard === "pigeon" && Auth::guard($guard)->check()) {
            return redirect('/pigeon');
        }
        if ($guard === "driver" && Auth::guard($guard)->check()) {
            return redirect('/driver');
        }
        if ($guard === "restaurant" && Auth::guard($guard)->check()) {
            return redirect('/restaurant');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
