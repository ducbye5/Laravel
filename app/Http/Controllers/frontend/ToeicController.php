<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\V_ToeicRepositoryInterface;

class ToeicController extends Controller
{
    protected $V_ToeicRepository;

	public function __construct(V_ToeicRepositoryInterface $V_ToeicRepository)
	{
		$this->V_ToeicRepository = $V_ToeicRepository;
	}
	public function index()
	{
		$url = $this->V_ToeicRepository->index();
		return $url;
	}
}
