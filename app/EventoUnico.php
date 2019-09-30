<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoUnico extends Model
{
    protected $fillable = [
        'latitude', 'longitude', 'data'
    ];

    public function apresentacao(){
        return $this->hasMany(Apresentacao::class);
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function festival(){
        return $this->belongsTo(Festival::class);
    }
}
