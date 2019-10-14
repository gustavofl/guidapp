<?php

namespace App\Validator;
use App\User;

class UserValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make(
            $dados,
            User::$rules,
            User::$messages);

        if(!$validator->errors()->isEmpty())
        {
            throw new ValidationException($validator, "Erro ao validar funcionario");
        }
    }
}
