<?php

namespace App\Repositories\Redis;
use App\Repositories\Contracts\C_NewsRepositoryInterface;
use App\Model\tbl_news;

class RedisNewsRepository implements C_NewsRepositoryInterface
{
	public function list_news()
	{
		$data = tbl_news::orderBy('news_id','desc')->join('user','user.user_id','=','tbl_news.user_id')->get();
		return view('backend.news',['data'=>$data]);
	}
	public function add_news()
	{
		return view('backend.add_edit_news');
	}
	public function do_add_news()
	{
			return redirect(url('admin/news'));
	}
	public function edit_news($id)
	{
		$data = tbl_news::where('news_id','=',$id)->first();
		return view('backend.add_edit_news',['data'=>$data]);
	}
	public function do_edit_news($id)
	{
			return redirect(url('admin/news'));
	}
	public function delete_news($id)
	{
			return redirect(url('admin/news'));
	}
}