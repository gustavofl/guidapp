<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao_evento extends Model
{
    protected $fillable = [
        'avaliacao'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
