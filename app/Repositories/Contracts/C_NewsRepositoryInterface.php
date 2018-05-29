<?php

namespace App\Repositories\Contracts;

interface C_NewsRepositoryInterface
{
	public function list_news();
	public function add_news();
	public function do_add_news();
	public function edit_news($id);
	public function do_edit_news($id);
	public function delete_news($id);
}