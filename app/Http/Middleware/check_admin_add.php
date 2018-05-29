<?php

namespace App\Http\Middleware;

use Closure;

class check_admin_add
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
        $user_id=$user->id;
        $user_level=$user->user_level;
        if($user_level>1)
        {    
                return redirect('PageNotFould'); 
        }
        return $next($request); 
    }
}
