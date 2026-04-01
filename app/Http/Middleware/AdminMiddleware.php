<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
        {
            // kalau belum login
            if (!auth()->check()) {
            return redirect('/login');
        }

            // kalau bukan admin
            if (auth()->user()->role !== 'admin') {
            abort(403);
        }

    return $next($request);
}
}
