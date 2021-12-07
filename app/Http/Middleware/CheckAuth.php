<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAuth
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
        if(!session()->has('isAuthorised') && ($request->path()!='signin' && $request->path()!='/'))
        {
            return redirect('/signin')->with('fail', 'You must logged in.');
        }
        if(session()->has('isAuthorised') && ($request->path()=='signin' || $request->path()=='/'))
        {
            return back();
        }
        return $next($request);
    }
}
