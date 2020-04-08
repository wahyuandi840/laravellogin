<?php

namespace App\Http\Middleware;

use Closure;

class CekLogin
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
        if(empty($request->session()->get('userid')) && !$request->is('user/*'))
        {
            return redirect("user/login");
        }

        if(!empty($request->session()->get('userid')) && $request->is('user/login'))
        {
            return redirect("home");
        }

        return $next($request);
    }



}
