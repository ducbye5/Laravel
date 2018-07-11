<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Request;
use App\Services\UserService;
use Hash;

class UserController extends Controller
{
	private $userService;

    public function __construct(
    	UserService $userService
    )
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $result = $this->userService->getListUser();
        $view = $result[1];
        $data = ['data'=>$result[2]];
        return view($view,$data);
    }

    public function viewCreate()
    {   
        $view = $this->userService->showViewCreate();
        return view($view);
    }

    private function inputDataToCreate($input)
    {
        $url = $this->userService->createUser($input);
        return $url;
    }

    public function create()
    {
        $name = Request::get('name');
        $email = Request::get('email');
        $password = Request::get('password');
        $password = Hash::make($password);
        $create_at = now();
        $update_at = now();
        $input = array($name,$email,$password,$create_at,$update_at);
        $url = $this->postDataToCreate($input);
        return redirect($url);
    }

    public function viewProfile($id)
    {
        $result = $this->userService->showProfile($id);
        $view  = $result['view'];
        $data  = $result['data'];
        return view($view,['data'=>$data]);
    }

    public function viewEdit($id)
    {
        $result = $this->userService->showViewEdit($id);
        $view = $result['view'];
        $data = $result['data'];
        return view($view,['data'=>$data]);
    }

    private function inputDataToEdit($id,$input)
    {
        $url = $this->userService->editProfile($id,$input);
        return $url;
    }

    public function edit($id)
    {
        $input = Request::all();
        $url = $this->inputDataToEdit($id,$input);
        return redirect($url);
    }

    public function delete($id)
    {
        $url = $this->userService->deleteUser($id);
        return redirect($url);
    }
}