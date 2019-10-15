<?php

namespace App\Validator;
use App\Promocao;

class PromocaoValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make(
            $dados,
            Promocao::$rules,
            Promocao::$messages);

        if(!$validator->errors()->isEmpty())
        {
            throw new ValidationException($validator, "Erro ao validar Promoção");
        }
    }
}
