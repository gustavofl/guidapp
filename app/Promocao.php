<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocao extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'texto', 'dia_semana', 'mes', 'data_inicial', 'data_final'
    ];

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }
}
