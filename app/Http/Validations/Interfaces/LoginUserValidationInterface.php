<?php

namespace App\Http\Validations\Interfaces;

interface LoginUserValidationInterface
{
    public function name();
    public function checkWord($dirty_text[]);
    public function errorMessage();
}