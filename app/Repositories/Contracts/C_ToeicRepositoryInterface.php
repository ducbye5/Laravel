<?php

namespace App\Repositories\Contracts;

interface C_ToeicRepositoryInterface
{
	public function list_question();
	public function download_question();
	public function edit_question($id);
	public function do_edit_question($id);
	public function delete_question($id);
	public function add_question();
	public function do_add_question();
}