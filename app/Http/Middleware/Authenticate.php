<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * @var Guard
     */
    protected $auth;

    /**
     * Authenticate constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!$this->auth->check())
        {
            return redirect()->to('/login')
                ->with('status', 'success')
                ->with('message', 'Please login.');
        }

        if (config('settings.activation')) {
            if ($this->auth->user()->activated == false) {
                session()->put('above-navbar-message', 'Please activate your email. <a href="'. route('authenticated.activation-resend') .'">Resend</a> activation email.');
            } else {
                session()->forget('above-navbar-message');
            }
        }

        if($role == 'all')
        {
            return $next($request);
        }
        if( $this->auth->guest() || !$this->auth->user()->hasRole($role))
        {
            abort(403);
        }

        return $next($request);
    }
}
