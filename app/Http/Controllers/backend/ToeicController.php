<?php

namespace App\Http\Controllers\backend;

use App\Repositories\Contracts\C_ToeicRepositoryInterface;
use App\Http\Controllers\Controller;

class ToeicController extends Controller
{
    protected $C_ToeicRepository;
    public function __construct(C_ToeicRepositoryInterface $C_ToeicRepository)
	{
		$this->C_ToeicRepository = $C_ToeicRepository;
	}
	public function list()
	{
		$url = $this->C_ToeicRepository->list_question();
		return $url;
	}
	public function download_question()
	{
		$url = $this->C_ToeicRepository->download_question();
		return $url;
	}
	public function add_question()
	{
		$url = $this->C_ToeicRepository->add_question();
		return $url;
	}
	public function do_add_question()
	{
		$url = $this->C_ToeicRepository->do_add_question();
		return $url;
	}
}
