<?php

namespace App\Http\Middleware\Backend;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = getUserRole($request->user()->role_id);

        if ($role->name != 'admin') {
            return redirect(RouteServiceProvider::Dashboard);
        }

        return $next($request);
    }
}