<?php

namespace App\Http\Middleware;

use App\Models\PageEvent;
use Closure;
use Illuminate\Http\Request;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Make it an after middleware
        $response = $next($request);

        try {
            PageEvent::create([
                'type' => 'pageview',
                'attribute' => $request->path(),
                'useragent' => $request->userAgent(),
                'visitorid' => crypt($request->ip(), config('hashing.encryption_key')),
            ]);

            return $response;
        } catch (Error $e) {
            report($e);

            return $response;
        }
    }
}
