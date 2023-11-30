<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the 'role' set to true
        if (Auth::check() && Auth::user()->role) {
            return $next($request);
        }

        // If not, redirect or handle the unauthorized access as needed
        return redirect('/dashboard_login')->with('error', 'Unauthorized access');

        // You can customize the behavior based on your application's requirements
    }
}
