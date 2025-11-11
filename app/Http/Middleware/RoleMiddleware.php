<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('login'); // User is not logged in
        }

        if (!in_array(Auth::user()->role->name, $roles)) {
            abort(403, 'Unauthorized'); // User does not have the correct role
        }

        return $next($request); // User is allowed
    }
}