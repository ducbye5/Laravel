<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LayoutService;

class LayoutController extends Controller
{
	private $layoutService;

    public function __construct(
    	LayoutService $layoutService
    )
    {
        $this->layoutService = $layoutService;
    }
    public function index()
    {
        $result = $this->layoutService->index();
        return view($result);
    }
}