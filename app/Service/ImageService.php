<?php

namespace App\Service;
use Request;

class ImageService
{
	public function hasFile($img)
	{
		if(Request::hasFile($img))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function extension($img)
	{
		$image=Request::file($img)->getClientOriginalExtension();
		if($image == 'jpg' || $image == 'png')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function size($img)
	{
		$image = Request::file($img)->getSize();
		if($image<=6000000 && $image > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function name($img)
	{
		$image=Request::file($img)->getClientOriginalName();
		$image=time(0).$image;
		return $image;
	}
	public function move($img, $url, $image)
	{
		return Request::file($img)->move($url,$image);
	}
	public function exist($url)
	{
		if(file_exists($url))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function unlink($url)
	{
		unlink($url);
	}
	public function error()
	{
		echo 'Error';
	}
}