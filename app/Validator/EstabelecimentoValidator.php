<?php

namespace App\Validator;
use App\Estabelecimento;

class EstabelecimentoValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make(
            $dados,
            Estabelecimento::$rules,
            Estabelecimento::$messages);

        if(!$validator->errors()->isEmpty())
        {
            throw new ValidationException($validator, "Erro ao validar Estabelecimento");
        }
    }
}
