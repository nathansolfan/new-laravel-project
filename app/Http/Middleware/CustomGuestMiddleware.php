<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomGuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info('CustomGuestMiddleware called');

        if (auth()->check()) {
            Log::info('User is authenticated, redirecting...');
            return redirect('/')->with('failure', 'Only guests can do that.');
        }

        Log::info('User is not authenticated, proceeding to next middleware.');
        return $next($request);
    }
}
