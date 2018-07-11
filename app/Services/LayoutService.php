<?php

namespace App\Services;
use App\Repositories\Interfaces\LayoutRepositoryInterface;

class LayoutService
{
	private $layoutRepository;

	public function __construct(
        LayoutRepositoryInterface $layoutRepository
    ) 
    {
        $this->layoutRepository = $layoutRepository;
    }

    public function index()
    {
    	$result = $this->layoutRepository->index();
    	return $result;
    }
}