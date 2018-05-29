<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\V_TestToeicRepositoryInterface;

class TestToeicController extends Controller
{
    protected $V_TestToeicRepository;

	public function __construct(V_TestToeicRepositoryInterface $V_ToeicRepository)
	{
		$this->V_TestToeicRepository = $V_ToeicRepository;
	}
	public function index($part,$id)
	{
		$url = $this->V_TestToeicRepository->index($part,$id);
		return $url;
	}
}
