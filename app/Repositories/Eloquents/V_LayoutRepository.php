<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\V_LayoutRepositoryInterface;
use App\Model\tbl_customer;
use Request;
use Auth;
use Hash;

class V_LayoutRepository implements V_LayoutRepositoryInterface
{
	public function logout()
	{
			Auth::logout();
			\Session::forget('customer');
			return redirect(url('/'));
	}
	public function login($username, $password)
	{
		$arr_user = tbl_customer::where('customer_username','=',$username)->first();
		if(!isset($arr_user) || hash::check($password,$arr_user->customer_password) == false)
		{		
			return view('index');
		}
		else
		{
			\Session::put('customer',$arr_user);
			return redirect(url('index'));
		}
	}
	public function register($fullname, $img, $sex, $birthday, $email, $phone, $username, $password,$description)
	{
		$password=hash::make($password);
		tbl_customer::insert(array(
			'customer_name'=>$fullname,
			'customer_img'=>$img,
			'customer_sex'=>$sex,
			'customer_email'=>$email,
			'customer_phone'=>$phone,
			'customer_birthday'=>$birthday,
			'customer_username'=>$username,
			'customer_password'=>$password,
			'customer_description'=>$description
		));
		return view('index');
	}
	public function index()
	{
		$fullname = Request::get('fullname');
		$sex = Request::get('sex');
		if($sex == 'man')
		{
			$img = 'man.png';
		}
		else
		{
			$img = 'woman.png';
		}
		$phone='';
		$birthday = Request::get('date');
		$description ='';
		$email = Request::get('email');
		$username = Request::get('username');
		$password = Request::get('password');
		if($fullname == '')
		{
			return $this->login($username, $password);
		}
		else
		{
			return $this->register($fullname, $img, $sex, $birthday, $email, $phone, $username, $password,$description);
		}
	}
}