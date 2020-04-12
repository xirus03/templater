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
        // redirect if not authenticated and role is not admin
        if(! auth()->check() || ! auth()->user()->hasRole('admin')) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
