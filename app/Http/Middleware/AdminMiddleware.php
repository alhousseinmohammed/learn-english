<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request); // Proceed to the next middleware or controller
        }

        // If not an admin, redirect to home or unauthorized page
        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
