<?php

namespace App\Validator;
use App\Prato;

class PratoValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make(
            $dados,
            Prato::$rules,
            Prato::$messages);

        if(!$validator->errors()->isEmpty())
        {
            throw new ValidationException($validator, "Erro ao validar Prato");
        }
    }
}
