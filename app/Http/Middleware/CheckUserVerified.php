<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserVerified
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
        if(auth()->user()->isVerified == false && (!is_null(auth()->user()->usertype))){
            return redirect()->route('getVerifyOtp');
        }
        return $next($request);
    }
}
