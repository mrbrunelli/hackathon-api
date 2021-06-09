<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has('LoggedUser')){
            return redirect()->route('login')->with('fail', 'Por favor, realize o login para acessar.');
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, mas-age=0, must-validade');
    }
}
