<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        // redirect if role is not admin
        if(! auth()->user()->hasRole('admin')) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
