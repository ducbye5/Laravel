<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $user=\Session::get('user');
        if(!$user)
        {
            return redirect('login');
        }
        view()->share('user',$user);
        return $next($request);
    }

}
