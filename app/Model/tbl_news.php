<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class tbl_news extends Model
{
	public $timestamps = false;
	protected $fillable = [
        'news_img', 'news_title', 'news_content','user_id',
    ];
}