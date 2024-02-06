<?php

namespace App\Http\Middleware;

use App\Models\Doctor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userconnect
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
        if (Auth::check()) {
           Doctor::where('id',Auth::user()->id)->update(['last_seen'=>now()]);
            
        }

        return $next($request);
    }
}
