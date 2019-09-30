<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function atracao(){
        return $this->belongsTo(EventoUnico::class);
    }

    public function evento(){
        return $this->belongsTo(EventoUnico::class);
    }

    public function prato(){
        return $this->belongsTo(EventoUnico::class);
    }

    public function promocao(){
        return $this->belongsTo(EventoUnico::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(EventoUnico::class);
    }

    public function usuario(){
        return $this->belongsTo(EventoUnico::class);
    }
}
