<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Festival extends Model
{
    use SoftDeletes;
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
