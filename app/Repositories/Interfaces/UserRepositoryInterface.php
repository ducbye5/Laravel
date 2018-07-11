<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
	public function getList();
	public function create($data);
	public function deleteUser($id);
	public function findByEmail($email);
	public function findById($id);
	public function findAllInformationById($id);
	public function updateByID($id,$data);
}