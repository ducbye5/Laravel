<?php

namespace App\Services;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ProfileRepositoryInterface;

class UserService
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

    public function getListUser()
    {
    	$data = $this->userRepository->getList();
        $view = 'backend.user';
        $result = array(1=>$view,2=>$data);
    	return $result;
    }

    public function showProfile($id)
    {
        $users_profile = $this->userRepository->findAllInformationById($id);
        $arr_data = array('view'=>'backend.profile','data'=>$users_profile);
        return $arr_data;
    }

    public function showViewCreate()
    {
        $view = 'backend.add_user';
        return $view;
    }

    public function createUser($input)
    {
        $id = $this->userRepository->create($input);
        $this->profileRepository->createWithUser_id($id);
        $url = 'admin/user';
        return $url;
    }

    public function deleteUser($id)
    {
        $this->userRepository->deleteUser($id);
        $this->profileRepository->deleteByUser_id($id);
        $url = 'admin/user';
        return $url;
    }

    public function showViewEdit($id)
    {
        $users_profile = $this->userRepository->findAllInformationById($id);
        $view = 'backend.edit_user';
        $data = ['view'=>$view,'data'=>$users_profile];
        return $data;
    }

    public function editProfile($id,$input)
    {
        $time_update = now();
        $updated_at = array('updated_at'=>$time_update);
        $input = array_merge($updated_at,$input);
        $update_users = $this->userRepository->updateByID($id,$input);
        $update_profile = $this->profileRepository->updateByID($id,$input);
        $url = 'admin/user/profile/'.$id;
        return $url;
    }
}