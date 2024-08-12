<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   //Veirifica si o usuario logado é admnistrador
        if ((Auth::user()->is_admin != 1)) {
            return response()->json(['message' => 'You do not have permission'], Response::HTTP_NOT_FOUND);
        }
        return $next($request);
    }
}
