<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventoUnico extends Model
{
    use SoftDeletes;
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
