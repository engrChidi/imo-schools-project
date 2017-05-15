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
        if( auth()->user()->hasRole('teacher')){
            return redirect()->route('teacher');
        }

        if( auth()->user()->hasRole('student')){
            return redirect()->route('student');
        }

        if( auth()->user()->hasRole('school')){
            return redirect()->route('school');
        }

        if( auth()->user()->hasRole('business')){
            return redirect()->route('business');
        }

        return $next($request);
    }
}
