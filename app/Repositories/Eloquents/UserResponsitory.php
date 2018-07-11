<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
	private $user;

	public function __construct(User $user)
	{
		$this->model = $user;
	}
	public function getList()
	{
		$query = $this->model
			->select(
				'users.id as id',
				'name',
				'profile.first_name as first_name',
				'profile.last_name as last_name',
				'profile.status as status',
				'profile.active as active',
				'profile.level as level'
			)
			->join('profile','users.id','=','profile.user_id')
			->orderBy('users.id','desc')
			->get();
		return $query;
	}

	public function create($data)
	{
		$query = $this->model->insertGetId(
			[
				'name'=>$data[0],
				'email'=>$data[1],
				'password'=>$data[2],
				'created_at'=>$data[3],
				'updated_at'=>$data[4]
			]
		);
		return $query;
	}

	public function deleteUser($id)
	{
		$query = $this->model->where('id',$id)->delete();
	}

	public function findByEmail($email = Null)
	{
		$query  = $this->model->select('id','name','email','password')
			->where('email',$email)
			->first();
		return $query;
	}

	public function findById($id)
	{
		$query = $this->model->select('*')->where('id',$id)->first();
		return $query;
	}

	public function findAllInformationById($id)
	{
		$query = $this->model
			->select(
				'users.id as id',
				'users.name as name',
				'users.email as email',
				'users.created_at as created_at',
				'users.updated_at as updated_at',
				'profile.image as image',
				'profile.first_name as first_name',
				'profile.last_name as last_name',
				'profile.sex as sex',
				'profile.birthday as birthday',
				'profile.address as address',
				'profile.telephone as telephone',
				'profile.facebook as facebook',
				'profile.twitter as twitter',
				'profile.linkedin as linkedin',
				'profile.pinterest as pinterest',
				'profile.description as description',
				'profile.status as status',
				'profile.active as active',
				'profile.level as level'
			)
			->join('profile','users.id','=','profile.user_id')
			->where('users.id','=',$id)
			->first();
		return $query;
	}

	public function updateByID($id,$data)
	{
		if(empty($data['password']))
		{
			$this->model
				->where('id','=',$id)
				->update(
					[
						'name'=>$data['nickname'],
						'updated_at'=>$data['updated_at']
					]
				);
		}
		else
		{
			$this->model
				->where('id','=',$id)
				->update(
					[
						'name'=>$data['nickname'],
						'password'=>$data['password'],
						'updated_at'=>$data['updated_at']
					]
				);
		}
	}
}