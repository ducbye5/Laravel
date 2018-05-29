<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\V_LayoutRepositoryInterface;
class LayoutController extends Controller
{
    protected $V_LayoutRepository;

	public function __construct(V_LayoutRepositoryInterface $V_LayoutRepository)
	{
		$this->V_LayoutRepository = $V_LayoutRepository;
	}
	public function logout()
	{
		$url = $this->V_LayoutRepository->logout();
		return $url;
	}
	public function index()
	{
		$url = $this->V_LayoutRepository->index();
		return $url;
	}
}
