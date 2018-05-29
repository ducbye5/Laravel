<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class check_news
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
        $news_id=$request->route('id');
        $news_user_id=DB::table('tbl_news')->select('user_id')
                                          ->where('id','=',$news_id)
                                          ->first()
        ;
        $news_user_id =  collect($news_user_id);
        //dd($news_user_id);
        if($user_level>1)
        {
            if($user_id != $news_user_id['user_id'])
            {
                return redirect('PageNotFould'); 
            }
        }
        return $next($request);
    
        
    }
}
