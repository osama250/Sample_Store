<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        $admin  = Auth::user()->is_admin;
        if ( $admin == 1  ) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
