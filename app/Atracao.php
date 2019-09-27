<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atracao extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];
}
