<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\C_NewsRepositoryInterface;
use App\Model\tbl_news;
use App\Service\ImageService;
use Request;
use Event;
use App\Events\backend\NewsEvent;

class C_NewsRepository implements C_NewsRepositoryInterface
{


	public function list_news()
	{
		$data = tbl_news::select('tbl_news.id','news_img','news_title','news_content','user_name')->orderBy('tbl_news.id','desc')->join('user','user.id','=','tbl_news.user_id')->get();
		return view('backend.news',['data'=>$data]);
	}
	public function add_news()
	{
		return view('backend.add_edit_news');
	}
	public function do_add_news()
	{
			$ImageService= new ImageService();

			$user=\Session::get('user');
			$user_id=$user->id;
			$title=empty(Request::get('title_news'))?'':Request::get('title_news');
			$content=empty(Request::get('content_news'))?'':Request::get('content_news');
			$img = 'image_news';
			if($ImageService->hasFile($img) == true)
			{
				$image_file=$ImageService->extension($img);
				$image_size=$ImageService->size($img);
					if($image_file == true && $image_size == true)
					{
						$image_name=$ImageService->name($img);
						$url=public_path().'upload/news';
						$ImageService->move($img,$url,$image_name);
						tbl_news::insert(array('news_img'=>$image_name,'news_title'=>$title,'news_content'=>$content,'user_id'=>$user_id));
					}
					else
					{
						$ImageService->error();
					}
				
			}
			else
			{
				$ImageService->error();
			}

			return redirect(url('admin/news'));
	}
	public function edit_news($id)
	{
		$data = tbl_news::where('id','=',$id)->first();
		return view('backend.add_edit_news',['data'=>$data]);
	}
	public function do_edit_news($id)
	{

			$ImageService= new ImageService();
			$img = 'image_news';

			$title=Request::get('title_news');
			$content=Request::get('content_news');
			tbl_news::where('id','=',$id)->update(array('news_title'=>$title,'news_content'=>$content));


			if($ImageService->hasFile($img) == true)
			{
				$image_file=$ImageService->extension($img);
				$image_size=$ImageService->size($img);
					if($image_size == true && $image_file == true)
					{
						$image_name=$ImageService->name($img);
						$url=public_path().'upload/news';
						$url_unlink=public_path().'upload/news/';
						$data = tbl_news::where('id','=',$id)->select('news_img')->first();
						if($data->news_img !='' && $ImageService->exist($url_unlink.$data->news_img)==true)
						{
							$ImageService->unlink($url_unlink.$data->news_img);

						}
						$ImageService->move($img,$url,$image_name);
						tbl_news::where('id','=',$id)->update(array('news_img'=>$image_name));
					}
					else
					{
						$ImageService->error();
					}
			}
			else
			{
				$ImageService->error();
			}

			$data = tbl_news::where('id','=',$id)->first();
			$data = $data->toArray();
			event(new NewsEvent($data));
			return redirect(url('admin/news'));
	}
	public function delete_news($id)
	{
			$ImageService= new ImageService();
			$url_unlink=public_path().'upload/news/';
			$data = tbl_news::where('id','=',$id)->select('news_img')->first();
			if($data->news_img !='' && ($ImageService->exist($url_unlink.$data->news_img))==true)
			{
				$ImageService->unlink($url_unlink.$data->news_img);
			}
			
			
			tbl_news::where('id','=',$id)->delete();
			return redirect(url('admin/news'));
	}
}