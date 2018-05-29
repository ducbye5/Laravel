<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\V_ToeicRepositoryInterface;
use Request;
class V_ToeicRepository implements V_ToeicRepositoryInterface
{
	public function index()
	{
		return view('frontend.toeic');
	}
}