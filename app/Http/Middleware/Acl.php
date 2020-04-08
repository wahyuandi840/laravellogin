<?php

namespace App\Http\Middleware;

use Closure;
use App\User as UserModel;

class Acl
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
        if($request->is('home/dashboard2') && $this->getUser($request)->userlv !=2)
        {
            return redirect('home/permission');
        }

        return $next($request);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    private function getUser($request)
    {
        $userid = $request->session()->get('userid');
        $user =  UserModel::where('userid', '=', $userid)->first();

        return $user;
    }
}
