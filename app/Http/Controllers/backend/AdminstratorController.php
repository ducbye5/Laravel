<?php
	namespace App\Http\Controllers\backend;
	use App\Http\Controllers\Controller;
	use App\Model\user;
	use App\Repositories\Contracts\C_UserRepositoryInterface;
	/**
	* 
	*/
	class AdminstratorController extends Controller
	{
		protected $C_UserRepository;

		public function __construct(C_UserRepositoryInterface $C_UserRepository)
		{
			$this->C_UserRepository = $C_UserRepository;
		}
		public function list()
		{
			$url = $this->C_UserRepository->list_user();
			return $url;
		}
		public function add()
		{
			$url = $this->C_UserRepository->add_user();
			return $url;
		}
		public function do_add()
		{
			$url = $this->C_UserRepository->do_add_user();
			return $url;
		}
		public function profile($id)
		{
			$url=$this->C_UserRepository->profile_user($id);
			return $url;
		}
		public function edit($id)
		{
			$url = $this->C_UserRepository->edit_user($id);
			return $url;
		}
		public function do_edit($id)
		{	
			$url = $this->C_UserRepository->do_edit_user($id);
			return $url;
		}
		public function delete($id)
		{
			$url = $this->C_UserRepository->delete_user($id);
			return $url;	
		}
	}
?>