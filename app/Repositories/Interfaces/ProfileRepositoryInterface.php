<?php

namespace App\Repositories\Interfaces;

interface ProfileRepositoryInterface
{
	public function createWithUser_id($id);
	public function deleteByUser_id($id);
	public function findByUser_id($user_id);
}