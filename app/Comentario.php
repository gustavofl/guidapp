<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'texto', 'lido'
    ];

    public function atracao(){
        return $this->belongsTo(Atracao::class);
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function prato(){
        return $this->belongsTo(Prato::class);
    }

    public function comentario(){
        return $this->belongsTo(Comentario::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
