<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atracao extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];

    public function contato(){
        return $this->hasMany(Contato::class);
    }

    public function apresentacao(){
        return $this->hasMany(Apresentacao::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }

    public function tag(){
        return $this->hasMany(Tag::class);
    }
}
