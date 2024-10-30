<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', 'en'); // Default to 'en' if not set
        App::setLocale($locale); // Set the application locale
        return $next($request);
    }
}
