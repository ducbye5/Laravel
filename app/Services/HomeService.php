<?php

namespace App\Services;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use Hash;
use Auth;

class HomeService
{
	private $userRepository;
    private $profileRepository;

	public function __construct(
        UserRepositoryInterface $userRepository,
        ProfileRepositoryInterface $profileRepository
    ) 
    {
        $this->userRepository = $userRepository;
        $this->profileRepository = $profileRepository;
    }

    public function viewLogin()
    {
        $view = 'backend.login';
        return $view;
    }
    public function login($input)
    {
        $user = $this->userRepository->findByEmail($input['email']);
        if(!empty($user))
        {
            $profile  = $this->profileRepository->findByUser_id($user->id);
            if(!empty($profile) && ($profile->active == 1) && ($profile->status == 0) && (hash::check($input['password'],$user->password) == true))
            {
                $user = $user->toArray();
                $profile = $profile->toArray();
                $user_profile = array_merge($user,$profile);
                \Session::put('user',$user_profile);
                $user_id = $user['id'];
                $array = ['status'=>1];
                $this->profileRepository->updateStatus($user_id,$array);
                $url = 'admin';
            }
            else
            {
                $url = 'login';
            }
        }
        else
        {
            $url = 'login';
        }
        return $url;
    }
    public function logout()
    {
        Auth::logout();
        $user_profile=\Session::get('user');
        $user_id=$user_profile['id'];
        $array = ['status'=>0];
        $this->profileRepository->updateStatus($user_id,$array);
        \Session::forget('user');
        $url = 'login';
        return $url;
    }
}