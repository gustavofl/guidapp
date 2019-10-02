<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apresentacao extends Model
{
    use SoftDeletes;
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
