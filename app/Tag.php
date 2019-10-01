<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function prato(){
        return $this->belongsToMany(Prato::class)
                    ->withPivot('prato_tag');
    }

    public function estabelecimento(){
        return $this->belongsToMany(Estabelecimento::class)
                    ->withPivot('estabelecimento_tag');
    }

    public function evento(){
        return $this->belongsToMany(Evento::class)
                    ->withPivot('evento_tag');
    }

    public function atracao(){
        return $this->belongsToMany(Atracao::class)
                    ->withPivot('atracao_tag');
    }
}
