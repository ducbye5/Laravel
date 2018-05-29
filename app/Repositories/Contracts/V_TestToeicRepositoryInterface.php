<?php

namespace App\Repositories\Contracts;
interface V_TestToeicRepositoryInterface
{
	public function testfull($id);
	public function testlisten($id);
	public function testread($id);
	public function testpart1($id);
	public function testpart2($id);
	public function testpart3($id);
	public function testpart4($id);
	public function testpart5($id);
	public function testpart6($id);
	public function testpart7($id);
	public function index($part,$id);
}