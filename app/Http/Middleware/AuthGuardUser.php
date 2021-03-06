<?php

namespace App\Http\Middleware;

use Closure;

class AuthGuardUser
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
        if (auth()->guard('user')->check()) { return $next($request); }
        return redirect()->route('cms.login');
    }
}
