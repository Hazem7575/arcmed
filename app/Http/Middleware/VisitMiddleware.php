<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VisitMiddleware
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
        if(!Cache::has(request()->ip())) {
            Visit::firstOrCreate([
                'ip' => \request()->ip(),
                'date' => now()->format('Y-m-d')
            ]);
            $cache = Cache::put(request()->ip() , '1' , (60 * 24));
        }

        return $next($request);
    }
}
