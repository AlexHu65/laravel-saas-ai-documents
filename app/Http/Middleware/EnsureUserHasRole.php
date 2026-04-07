<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    public function handle(Request $request, Closure $next, string $role, ?string $feature = null)
    {
        if (!auth()->check() || !auth()->user()->hasRole($role) || ($feature && !feature($feature))) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
