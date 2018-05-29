<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class check_admin_edit
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
        $admin_id=$request->route('id');
        if($user_level>1)
        { 
            if($user_id != $admin_id)
            {
                return redirect('PageNotFould'); 
            }
        }
        return $next($request);
    
        
    }
}
