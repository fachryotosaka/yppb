<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna memiliki peran admin
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // Redirect atau tanggapi sesuai kebijakan keamanan Anda
        return abort(403, 'Unauthorized');
    }
}
