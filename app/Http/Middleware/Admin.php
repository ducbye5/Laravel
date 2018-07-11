<?php

namespace App\Http\Middleware;

use Closure;

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
        $this->middlewareCheckLogin();
        return $next($request);
    }

    public function middlewareCheckLogin()
    {
        $name = 'user';
        $data = $this->data();
        $this->login($data);
        $this->shareData($name,$data);
    }


    private function login($data)
    {
        if(!$data)
        {
            return redirect('login');
        }
    }
    private function shareData($name,$data)
    {
        view()->share($name,$data);
    }
    private function data()
    {
        $data=\Session::get('user');
        return $data;
    }
}
