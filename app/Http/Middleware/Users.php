<?php

namespace App\Http\Middleware;
use Redirect;

use Closure;
use Auth;
class Users
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
        if (Auth::check() && Auth::user()->role == 'users') {
            return $next($request);
        } elseif(!Auth::check()){
            Auth::logout();
            return Redirect::to('login');
        } else {
            return redirect('/dashboard');
        }
        //return $next($request);
    }
}
