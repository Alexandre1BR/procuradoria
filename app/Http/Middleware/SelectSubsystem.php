<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class SelectSubsystem
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        info('handle subsystem --------------------------------');
        info(Auth::guard($guard)->check() ? 'true' : 'false');
        info(Session::get('subsystem') ? 'true' : 'false');

        if (Auth::guard($guard)->check() && !Session::get('subsystem')) {
            return redirect()->route('subsystem.index');
        }

        return $next($request);
    }
}
