<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\V_TestToeicRepositoryInterface;
use Request;
class V_TestToeicRepository implements V_TestToeicRepositoryInterface
{
	public function testfull($id)
	{
		return view('frontend.testtoeic.full');
	}
	public function testlisten($id)
	{
		return view('frontend.testtoeic.listen');
	}
	public function testread($id)
	{
		return view('frontend.testtoeic.read');
	}
	public function testpart1($id)
	{
		return view('frontend.testtoeic.part1');
	}
	public function testpart2($id)
	{
		return view('frontend.testtoeic.part2');
	}
	public function testpart3($id)
	{
		return view('frontend.testtoeic.part3');
	}
	public function testpart4($id)
	{
		return view('frontend.testtoeic.part4');
	}
	public function testpart5($id)
	{
		return view('frontend.testtoeic.part5');
	}
	public function testpart6($id)
	{
		return view('frontend.testtoeic.part6');
	}
	public function testpart7($id)
	{
		return view('frontend.testtoeic.part7');
	}
	public function index($part,$id)
	{
		if($part == "5")
		{
			return $this->testpart5($id);
		}
		else
		{
			echo "oke";
		}
	}
}