<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'user_img',
        'user_name',
        'user_username',
        'user_password',
        'user_sex',
        'user_address',
        'user_birthday',
        'user_email',
        'user_phone',
        'user_description',
        'user_level',
        'user_use',
    ];
}
