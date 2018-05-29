<?php
	namespace App\Http\Controllers\backend;
	use App\Http\Controllers\Controller;
// sử dụng file ở Eloquents
	//use App\Repositories\Eloquents\NewsRepository;
// sử dụng file ở Redis
	//use App\Repositories\Redis\RedisNewsRepository;
// sử dụng file ở Constracts(interface)
	use App\Repositories\Contracts\C_NewsRepositoryInterface;
	
	class NewsController extends Controller
	{
		protected $C_NewsRepository;
// sử dụng file ở  Redis
		// public function __construct(RedisNewsRepository $NewsRepository)
		// {
		// 	$this->NewsRepository = $NewsRepository;
		// }
// sử dụng file ở Eloquents
		// public function __construct(NewsRepository $NewsRepository)
		// {
		// 	$this->NewsRepository = $NewsRepository;
		// }
// sử dụng interface
		public function __construct(C_NewsRepositoryInterface $C_NewsRepository)
		{
			$this->C_NewsRepository = $C_NewsRepository;
		}
		
		public function list()
		{
			$url = $this->C_NewsRepository->list_news();
			return $url;
		}
		public function add()
		{	
			$url = $this->C_NewsRepository->add_news();
			return $url;
		}
		public function do_add()
		{
			$url = $this->C_NewsRepository->do_add_news();
			return $url;
		}
		public function edit($id)
		{
			$url = $this->C_NewsRepository->edit_news($id);
			return $url;
		}
		public function do_edit($id)
		{
			$url = $this->C_NewsRepository->do_edit_news($id);
			return $url;
		}
		public function delete($id)
		{
			$url = $this->C_NewsRepository->delete_news($id);
			return $url;
		}

	}
?>