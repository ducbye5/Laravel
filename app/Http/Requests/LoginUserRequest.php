<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;
use App\Http\Validations\Interfaces\LoginUserValidationInterface;

class LoginUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $factory;
    private $loginUserValidation;

    public function __construct(
        //Factory $factory
        //LoginUserValidationInterface $loginUserValidation
    )
    {
        //$this->factory = $factory;
        //$this->loginUserValidation = $loginUserValidation;
    }
    public function checkInput()
    {
        $dirty_text = ['z'];
        $name = $this->loginUserValidation->name();
        $checkWord = $this->loginUserValidation->checkWord($dirty_text);
        $errorMessage = $this->loginUserValidation->errorMessage();

        $this->factory->extend($name,$checkWord,$errorMessage);
    }
    public function authorize()
    {
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|max:255|email',
            'password'=>'required|max:255'
        ];
    }
}
