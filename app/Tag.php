<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    private $fillable = [
        'nome'
    ];

    public function prato(){
        return $this->belongsToMany(Prato::class);
    }

    public function estabelecimento(){
        return $this->belongsToMany(Estabelecimento::class);
    }

    public function evento(){
        return $this->belongsToMany(Evento::class);
    }
}
