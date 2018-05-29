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
	public function Extension($img)
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
	public function Size($img)
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
	public function Name($img)
	{
		$image=Request::file($img)->getClientOriginalName();
		$image=time(0).$image;
		return $image;
	}
	public function Move($img, $url, $image)
	{
		return Request::file($img)->move($url,$image);
	}
	public function Exist($url)
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
	public function Unlink($url)
	{
		unlink($url);
	}
	public function Error()
	{
		echo 'Error';
	}
}