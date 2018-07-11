<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\LayoutRepositoryInterface;

class LayoutRepository implements LayoutRepositoryInterface
{
	public function index()
	{
		return 'backend.layout';
	}
}