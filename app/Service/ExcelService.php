<?php

namespace App\Service;
use Request;
/**
 * 
 */
class ExcelService 
{
	public function hasFile($file)
	{
		if(Request::hasFile($file))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function extension($file)
	{
		$excel=Request::file($file)->getClientOriginalExtension();
		if($excel == 'xlsx' || $excel == 'xls')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function size($file)
	{
		$excel = Request::file($file)->getSize();
		if($excel>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function name($file)
	{
		$excel=Request::file($file)->getClientOriginalName();
		$excel=time(0).$excel;
		return $excel;
	}
	public function move($file, $url, $excel)
	{
		return Request::file($file)->move($url,$excel);
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