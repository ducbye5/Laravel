<?php

namespace App\Http\Middleware;

use Closure;

class V_index
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
        $customer=\Session::get('customer');
        if(!$customer)
        {
            return redirect(url(''));
        }
        view()->share('customer',$customer);
        return $next($request);
    }
}
