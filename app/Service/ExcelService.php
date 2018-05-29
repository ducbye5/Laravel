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
	public function Extension($file)
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
	public function Size($file)
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
	public function Name($file)
	{
		$excel=Request::file($file)->getClientOriginalName();
		$excel=time(0).$excel;
		return $excel;
	}
	public function Move($file, $url, $excel)
	{
		return Request::file($file)->move($url,$excel);
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