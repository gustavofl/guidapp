<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apresentacao extends Model
{
    protected $fillable = [
        'hora'
    ];

    public function atracao(){
        return $this->belongsTo(Atracao::class);
    }

    public function evento_unico(){
        return $this->belongsTo(EventoUnico::class);
    }
}
