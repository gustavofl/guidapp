<?php

namespace App\Validator;
use App\Evento;

class EventoValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make(
            $dados,
            Evento::$rules,
            Evento::$messages);

        if(!$validator->errors()->isEmpty())
        {
            throw new ValidationException($validator, "Erro ao validar Evento");
        }
    }
}
