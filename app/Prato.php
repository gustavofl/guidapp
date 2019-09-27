<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    private $fillable = [
        'nome', 'descricao', 'preco'
    ];
}
