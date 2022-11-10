<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
Session_start();

class AuthCheck
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
        $user_id = Session::get('user_id');
        if(!Session()->has('user_id')){
            return redirect('signin')->with('fail','Please login first');
        }
        return $next($request);
    }
}
