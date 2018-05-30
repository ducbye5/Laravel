<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\C_UserRepositoryInterface;
use App\Model\user;
use App\Service\ImageService;
use Request;
use Hash;

class C_UserRepository implements C_UserRepositoryInterface
{
	public function list_user()
	{
		$data=user::where('id','!=',1)->orderBy('id','desc')->get();
		return view('backend.adminstrator',['data'=>$data]);
	}
	public function add_user()
	{
		return view('backend.add_edit_adminstrator');
	}
	public function do_add_user()
	{

		$ImageService= new ImageService();
		$img= 'user_img';
			$username=Request::get('user_username');
			$password=Request::get('user_password');
			$password=hash::make($password);
			$fullname=empty(Request::get('user_fullname'))?'':Request::get('user_fullname');
			$sex=Request::get('user_sex');
			$birthday=Request::get('user_birthday');
			$address=Request::get('user_address');
			$email=empty(Request::get('user_email'))?'':Request::get('user_email');
			$phone=empty(Request::get('user_phone'))?'':Request::get('user_phone');
			$level=2;
			$use=0;
			$description=empty(Request::get('user_description'))?'':Request::get('user_description');
			$arr_username=user::select('user_username')->get();
			if($arr_username==$username)
			{
				$message= 'Username available';
				return redirect(url('admin/adminstrator/add'));
			}
			else
			{
				
				if($ImageService->hasFile($img) == true)
				{
					$image_file=$ImageService->extension($img);
					$image_size=$ImageService->size($img);
						if($image_file == true && $image_size == true)
						{
							$image_name=$ImageService->name($img);
							$url=public_path().'\upload\user';
							$ImageService->move($img,$url,$image_name);
							user::insert(array(
									'user_img'=>$image_name,
									'user_username'=>$username,
									'user_password'=>$password,
									'user_name'=>$fullname,
									'user_sex'=>$sex,
									'user_birthday'=>$birthday,
									'user_address'=>$address,
									'user_email'=>$email,
									'user_phone'=>$phone,
									'user_description'=>$description,
									'user_level'=>$level,
									'user_use'=>$use
								));
						}
						else
						{
							$ImageService->error();
						}
				}
				else
				{
					if($sex=='man')
						{
							$image_name='man.png';
						}
						else
						{
							$image_name='woman.png';
						}
						user::insert(array(
									'user_img'=>$image_name,
									'user_username'=>$username,
									'user_password'=>$password,
									'user_name'=>$fullname,
									'user_sex'=>$sex,
									'user_birthday'=>$birthday,
									'user_address'=>$address,
									'user_email'=>$email,
									'user_phone'=>$phone,
									'user_description'=>$description,
									'user_level'=>$level,
									'user_use'=>$use
								));
				}
				return redirect(url('admin/adminstrator'));
			}
	}
	public function profile_user($id)
	{
		$data=user::where('id','=',$id)->first();
		return view('backend.profile_adminstrator',['data'=>$data]);
	}
	public function edit_user($id)
	{
		$data=user::where('id','=',$id)->first();
		return view('backend.add_edit_adminstrator',['data'=>$data]);
	}
	public function do_edit_user($id)
	{
		$ImageService= new ImageService();
		$img= 'user_img';

			$data = user::where('id','=',$id)->select('user_img')->first();
			$password=Request::get('user_password');
			$sex=Request::get('user_sex');
			$birthday=Request::get('user_birthday');
			$address=Request::get('user_address');
			$fullname=empty(Request::get('user_fullname'))?'':Request::get('user_fullname');
			$email=empty(Request::get('user_email'))?'':Request::get('user_email');
			$phone=empty(Request::get('user_phone'))?'':Request::get('user_phone');
			$description=empty(Request::get('user_description'))?'':Request::get('user_description');
			if($password!="")
			{
				$password=hash::make($password);
				user::where('id','=',$id)->update([
					'user_password'=>$password,
					'user_name'=>$fullname,
					'user_sex'=>$sex,
					'user_birthday'=>$birthday,
					'user_address'=>$address,
					'user_email'=>$email,
					'user_phone'=>$phone,
					'user_description'=>$description
				]);
			}
			else
			{
				user::where('id','=',$id)->update([
					'user_name'=>$fullname,
					'user_sex'=>$sex,
					'user_birthday'=>$birthday,
					'user_address'=>$address,
					'user_email'=>$email,
					'user_phone'=>$phone,
					'user_description'=>$description
				]);
			}

				if($ImageService->hasFile($img) == true)
				{
					$image_file=$ImageService->extension($img);
					$image_size=$ImageService->size($img);
						if($image_file == true && $image_size == true)
						{
							$image_name=$ImageService->name($img);
							$url=public_path().'upload/user';
							$url_unlink = 'upload/user/';
							if($data->user_img !='' && $ImageService->exist($url_unlink.$data->user_img)==true)
							{
								$ImageService->unlink($url_unlink.$data->user_img);

							}
							$ImageService->move($img,$url,$image_name);
							user::where('id','=',$id)->update(['user_img'=>$image_name]);
						}
						else
						{
							$ImageService->error();
						}
				}
				else
				{
					if(($data->user_img == 'man.png') || ($data->user_img == 'woman.png'))
					{
						if($sex == 'man')
						{
							$image_name = 'man.png';
							user::where('id','=',$id)->update(['user_img'=>$image_name]);
						}
						else
						{
							$image_name = 'woman.png';
							user::where('id','=',$id)->update(['user_img'=>$image_name]);
						}
					}
				}
			$user_level = \Session::get('user')->user_level;
			if($user_level > 1)
			{
				\Session::forget('user');
				$arr=user::where('id','=',$id)->first();
				\Session::put('user',$arr);
			}
			return redirect(url('admin/adminstrator/profile/'.$id));
	}
	public function delete_user($id)
	{
			$ImageService= new ImageService();
			$img= 'user_img';
			$data = user::where('id','=',$id)->select('user_img','user_level')->first();
				if($data->user_level == 1)
				{
					return redirect(url('PageNotFould'));
				}
				else
				{
					$url_unlink='upload/user/';
					if($data->user_img !='' && $ImageService->exist($url_unlink.$data->user_img)==true)
					{
						$ImageService->unlink($url_unlink.$data->user_img);

					}
					user::where('id','=',$id)->delete();
					return redirect(url('admin/adminstrator'));
				}
	}
}