<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserType
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
        if(auth()->user()->isVerified == false){
            return redirect()->route('getVerifyOtp');
        }

        if( is_null(auth()->user()->usertype)){
            return redirect()->route('more-info');
        }

        return $next($request);
    }
}
