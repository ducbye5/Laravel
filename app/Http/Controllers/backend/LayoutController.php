<?php
	namespace App\Http\Controllers\backend;
	use App\Http\Controllers\Controller;
	use DB;
	use Request;
	use Hash;

	
	class LayoutController extends Controller
	{
		
		public function layout()
		{
			$user=\Session::get('user');
			return view('backend.layout',['user'=>$user]);
		}
	}
?>