<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'avaliacao', 'visitas', 'hash'
    ];
}
