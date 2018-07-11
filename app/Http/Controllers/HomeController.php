<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\HomeService;
use App\Http\Requests\LoginUserRequest;
    
    class HomeController extends Controller
    {
        
        protected $homeService;
        public function __construct(HomeService $homeService)
        {
            $this->homeService = $homeService;
        }

        public function viewLogin()
        {
            $view = $this->homeService->viewlogin();
            return view($view);
        }
        public function login(LoginUserRequest $request)
        {
            $input = $request->all();
            $url = $this->homeService->login($input);
            return redirect($url);
        }
        public function logout()
        {
            $url = $this->homeService->logout();
            return redirect($url);
        }
    }
?>