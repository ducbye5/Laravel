<?php

namespace App\Http\Validations;
use App\Http\Validations\Interfaces\LoginUserValidationInterface;

/**
 * 
 */
class LoginUserValidation implements LoginUserValidationInterface
{
	
	public function name()
    {
        return 'email';
    }

    public function checkWord($dirty_text[])
    {
        return function ($value) {
            $str = preg_replace('\s+', ' ', $value);
            $word_arr = explode(" ", $str);
            foreach($word_arr as $word){
                if(isset($dirty_text[$word])){
                    return true;
                }
            }
            return false;
        }
    }

    public function errorMessage()
    {
        return 'Nội dung không được chứa các từ ngữ vi phạm thuần phong mỹ tục.';
    }
}