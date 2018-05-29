<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\C_HomeRepositoryInterface;
use App\Model\user;
use Request;
use Auth;
use Hash;

class C_HomeRepository implements C_HomeRepositoryInterface
{
	public function viewlogin()
	{
		return view('backend.login');
	}
	public function login()
	{
			$username=Request::get('username');
			$password=Request::get('password');
			$arr=user::where('user_username','=',$username)
					->first();
			if(!isset($arr) || hash::check($password,$arr->user_password)==false || $arr->user_use!=0)
			{
				return redirect(url('login'));
			}
			user::where('user_username','=',$username)->update(['user_use'=>1]);
			\Session::put('user',$arr);
			return redirect(url('admin/layout'));
	}
	public function logout()
	{
			Auth::logout();
			$arr=\Session::get('user');
			$id=$arr->id;
			user::where('id','=',$id)->update(['user_use'=>0]);
			\Session::forget('user');
			return redirect(url('login'));
	}
}