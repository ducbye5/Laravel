<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use App\Repositories\Contracts\C_HomeRepositoryInterface;
	
	class HomeController extends Controller
	{
		
		protected $C_HomeRepository;
		public function __construct(C_HomeRepositoryInterface $C_HomeRepository)
		{
			$this->C_HomeRepository = $C_HomeRepository;
		}

		public function viewlogin(){
			$url = $this->C_HomeRepository->viewlogin();
			return $url;
		}
		public function login()
		{
			$url = $this->C_HomeRepository->login();
			return $url;
		}
		public function logout()
		{
			$url = $this->C_HomeRepository->logout();
			return $url;
		}
	}
?>