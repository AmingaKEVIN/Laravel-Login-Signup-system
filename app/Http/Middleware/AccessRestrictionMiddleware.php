<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessRestrictionMiddleware
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

        if (!$this->isUserLoggedIn()) {
            // If not "logged in", redirect to the login page
            return redirect()->route('login');
        }
        return $next($request);
    }
    private function isUserLoggedIn()
    {
        // Check if the session contains the flag indicating "logged in" status
        return session()->has('user_id');
    }
}
