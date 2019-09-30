<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'abertura', 'fechamento', 'dia_semana'
    ];

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }
}
