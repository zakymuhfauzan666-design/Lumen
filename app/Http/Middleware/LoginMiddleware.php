<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->input('username') == 'zaky' && $request->input('password') == 'ganteng') {
            return $next($request);
        }

        return "Anda tidak di ijinkan untuk mengakses data nilai, karena username dan password anda salah.";
    }
}