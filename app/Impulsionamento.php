<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impulsionamento extends Model
{
    protected $fillable = [
        'data_inicial', 'data_final', 'preco_dia', 'data_compra'
    ];
}
