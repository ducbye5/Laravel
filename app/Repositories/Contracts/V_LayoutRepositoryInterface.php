<?php

namespace App\Repositories\Contracts;

interface V_LayoutRepositoryInterface
{
	public function login($username, $password);
	public function logout();
	public function register($fullname, $img, $sex, $birthday, $email, $phone, $username, $password,$description);
	public function index();
}