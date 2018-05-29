<?php

namespace App\Repositories\Contracts;

interface C_UserRepositoryInterface
{
	public function list_user();
	public function add_user();
	public function do_add_user();
	public function profile_user($id);
	public function edit_user($id);
	public function do_edit_user($id);
	public function delete_user($id);
}