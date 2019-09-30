<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    protected $fillable = [
        'cidade'
    ];

    public function eventoUnico(){
        return $this->hasMany(EventoUnico::class);
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
