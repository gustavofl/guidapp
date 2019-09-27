<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    private $fillable = [
        'texto', 'dia_semana', 'mes', 'data_inicial', 'data_final'
    ];
}
