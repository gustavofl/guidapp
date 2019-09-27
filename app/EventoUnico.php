<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoUnico extends Model
{
    protected $fillable = [
        'latitude', 'longitude', 'data'
    ];
}
