<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    private $fillable = [
        'texto', 'dia_semana', 'mes', 'data_inicial', 'data_final'
    ];

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }
}
