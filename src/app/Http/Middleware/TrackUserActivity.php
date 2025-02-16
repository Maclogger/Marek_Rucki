<?php

namespace App\Http\Middleware;

use App\Events\UserStatusUpdated;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class TrackUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Log::info("Spustil sa handleTrackUserActivity");
        if (auth()->check()) {
            //Log::info("novy event");
            //broadcast(new UserStatusUpdated(auth()->user(), true));
        }

        return $next($request);
    }
}
