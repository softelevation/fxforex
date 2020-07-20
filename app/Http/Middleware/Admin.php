<?php

namespace App\Http\Middleware;
use Redirect;

use Closure;
use Auth;
class Admin
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
        //return $next($request);
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        } elseif(!Auth::check()){
            Auth::logout();
            return Redirect::to('login');
        }  else {
            return redirect('/home');
        }
    }
}
