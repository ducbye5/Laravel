<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use App\Models\profile;

class ProfileRepository implements ProfileRepositoryInterface
{
	private $profile;

	public function __construct(Profile $profile)
	{
		$this->model = $profile;
	}
	

	public function createWithUser_id($id)
	{
		$query = $this->model->insert(['user_id'=>$id,'active'=>1]);
	}

	public function deleteByUser_id($id)
	{
		$query = $this->model->where('user_id',$id)->delete();
	}

	public function findByUser_id($user_id)
	{
		$query = $this->model->select('first_name','last_name','sex','birthday','address','telephone','description','level','status','active')
			->where('user_id',$user_id)
			->first();
		return $query;
	}

	public function updateStatus($user_id,$array)
	{
		$query = $this->model->where('user_id',$user_id)->update($array);
	}

	public function updateByID($id,$data)
	{
		if(empty($data['active']))
		{
			$this->model
				->where('user_id','=',$id)
				->update(
					[
						//'image'=>$data['image'],
						'first_name'=>$data['firstname'],
						'last_name'=>$data['lastname'],
						'sex'=>$data['sex'],
						'birthday'=>$data['birthday'],
						'address'=>$data['address'],
						'telephone'=>$data['telephone'],
						'description'=>$data['description'],
						'facebook'=>$data['facebook'],
						'twitter'=>$data['twitter'],
						'linkedin'=>$data['linkedin'],
						'pinterest'=>$data['pinterest']
					]
				);
		}
		else
		{
			$this->model
				->where('user_id','=',$id)
				->update(
					[
						//'image'=>$data['image'],
						'first_name'=>$data['firstname'],
						'last_name'=>$data['lastname'],
						'sex'=>$data['sex'],
						'birthday'=>$data['birthday'],
						'address'=>$data['address'],
						'telephone'=>$data['telephone'],
						'description'=>$data['description'],
						'facebook'=>$data['facebook'],
						'twitter'=>$data['twitter'],
						'linkedin'=>$data['linkedin'],
						'pinterest'=>$data['pinterest'],
						'active'=>$data['active']
					]
				);
		}
	}

}