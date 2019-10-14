<?php

namespace App\Validator;

class ValidationException extends \Exception
{
    protected $validator;

    public function __construct($validator, $text = "mensagem de erro")
    {
        parent::__construct($text);
        $this->validator = $validator;
    }

    public function getValidator() {
        return $this->validator;
    }
}