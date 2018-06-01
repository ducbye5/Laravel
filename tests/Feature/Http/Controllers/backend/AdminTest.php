<?php

namespace Tests\Feature\Http\Controllers\backend;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Request;
use Storage;
/**
*  @group Admin
*  @testdox  Test Admin
*/
class AdminTest extends TestCase
{
    use WithoutMiddleware;
    /**
    * @testdox Test exist controller
    */
    public function testExistControllerAdmin()
    {
        $controller_admin=\App::make(\App\Http\Controllers\backend\AdminstratorController::class);
        $this->assertNotNull($controller_admin);
    }
    /**
    * @testdox Test create controller
    */
    public function testCreateAdmin()
    {
        $create = factory(\App\Model\user::class)->make();
       // $this->actingAs($create)->withSession(['user' => $create]);
        $data_array = $create->toArray();
        Storage::fake('fake');
        $file = UploadedFile::fake()->image('a.jpg')->size(1000);
        $test = Request::hasFile($file);
        $data = [
            //'user_img'=>$file,
            'user_username'=>$data_array['user_username'],
            'user_password'=>$data_array['user_password'],
            'user_fullname'=>$data_array['user_name'],
            'user_sex'=>$data_array['user_sex'],
            'user_birthday'=>$data_array['user_birthday'],
            'user_address'=>$data_array['user_address'],
            'user_email'=>$data_array['user_email'],
            'user_phone'=>$data_array['user_phone'],
            'user_description'=>$data_array['user_description']
        ]; 
        $response = $this->post('admin/adminstrator/add',$data);
        $response->assertStatus(302);
        $response->assertRedirect('admin/adminstrator');
        $arr_id = \App\Model\user::select('id')->orderBy('id','desc')->first();
        $id = $arr_id->toArray();
        $id = $id['id'];
        $this->assertNotNull($id);
        return $id;
    }
    /**
    * @testdox Test edit admin
    * @depends testCreateAdmin
    */

    public function testEditAdmin($id)
    {
        $data_obj = \App\Model\user::select('*')->where('id','=',$id)->first();
        $data_array = $data_obj->toArray();
        $data = [
            'user_username'=>$data_array['user_username'],
            'user_password'=>$data_array['user_password'],
            'user_fullname'=>$data_array['user_name'],
            'user_sex'=>'woman',
            'user_birthday'=>$data_array['user_birthday'],
            'user_address'=>$data_array['user_address'],
            'user_email'=>$data_array['user_email'],
            'user_phone'=>$data_array['user_phone'],
            'user_description'=>$data_array['user_description']
        ]; 
        $response = $this->post('admin/adminstrator/edit/'.$id,$data);
        //$response->assertStatus(500);
        $response->assertStatus(302);
        $response->assertRedirect('admin/adminstrator');
    }
    /**
    *   @testdox Test delete admin with id
    *   @depends testCreateAdmin
    */
    public function testDeleteAdmin($id)
    {
        $response = $this->get('admin/adminstrator/delete/'.$id);
        $response->assertStatus(302);
        $response->assertRedirect('admin/adminstrator');
        $check =\App\Model\user::find($id);
        $this->assertNull($check);
    }
    /**
    *   @testdox Test delete admin
    */
    public function testDeleteAdmin1()
    {
        $create = factory(\App\Model\user::class)->create();
        $id = $create->id;
        $response = $this->get('admin/adminstrator/delete/'.$id);
        $response->assertStatus(302);
        $response->assertRedirect('admin/adminstrator');
        $check =\App\Model\user::find($id);
        $this->assertNull($check);
    }
}
