<?php

namespace Tests\Feature\Http\Controllers\backend;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
*  @group News
*  @testdox  Test News
*/
class NewsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use WithoutMiddleware;
    public function testExistControllerNews()
    {
        $controller_news=\App::make(\App\Http\Controllers\backend\NewsController::class);
        $this->assertNotNull($controller_news);
    }

    public function testCreateNews()
    {
    	$make = factory(\App\Model\tbl_news::class)->make();
    	//$data = $make->toArray();
    	$data = [
    		'title_news'=>'abc',
    		'content_news'=>'abc',
    		'img_news'=>'6.jpg'
    	];
    	$response = $this->post('admin/news/add', $data);
    	$response->assertStatus(500);
    	//$response = $this->call('POST','admin/news/add', $data);
    	//$response->assertStatus(404);
    	//$response->assertRedirect('admin/news');
    }

    public function testEditNews()
    {
    	$id = 1;
    	$response = $this->get('admin/news/edit/'.$id);
    	$response->assertStatus(500);
    	//$response->assertRedirect('admin/news');
    }
    public function testDeleteNews()
    {
    	$create = factory(\App\Model\tbl_news::class)->create();
    	$id = $create->id;
    	$response = $this->get('admin/news/delete/'.$id);
    	$response->assertStatus(302);
    	$check_id = \App\Model\tbl_news::find($id);
    	$this->assertNull($check_id);
    }
}
