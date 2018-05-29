<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Model\user::class, function (Faker $faker) {
    return [
        	'user_img'=>'man.png',
            'user_name'=>'Nguyen Van Z',
            'user_username'=>'admin100',
            'user_email'=>'a@gmail.com',
            'user_password'=>'123456',
            'user_sex'=>'man',
            'user_address'=>'Hanoi',
            'user_birthday'=>'2018-04-03',
            'user_phone'=>'123456',
            'user_description'=>'Hanoi',
            'user_level'=>'2',
            'user_use'=>'0'
    ];
});
$factory->define(App\Model\tbl_news::class, function (Faker $faker) {
    return [
        	'news_img'=>'1.jpg',
            'news_title'=>'Test logic',
            'news_content'=>'Ta đã cùng đi qua các bước cơ bản để thực hiện việc tạo Mock Objec và mock các chức năng. Nhưng nếu như tất cả các hàm ta dự định sử dụng trong khi test đều phải khai báo đầy đủ như vậy, công việc ta phải làm sẽ nhiều hơn rất nhiều. Đó là lúc ta cần sử dụng đến partial mock. Giống như tên gọi, partial mock là khi, ta sẽ chỉ tạo mock cho 1 phần cụ thể, còn những chức năng còn lại, ta vấn sử dụng như bình thường của object. Có hai cách làm, hoặc bạn thể có thể khai báo chỉ những chức năng nào của object được mock ngay từ khi khởi tạo',
            'user_id'=>'3'
    ];
});

