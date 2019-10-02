<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estabelecimento extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome', 'latitude', 'longitude', 'descricao', 'telefone', 'cidade'
    ];

    public function evento(){
        return $this->hasMany(Evento::class);
    }

    public function tag(){
        return $this->hasMany(Tag::class);
    }

    public function prato(){
        return $this->hasMany(Prato::class);
    }

    public function promocao(){
        return $this->hasMany(Promocao::class);
    }

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }

    public function horario(){
        return $this->hasMany(Horario::class);
    }

    public function avaliacao(){
        return $this->hasMany(Avaliacao_estabelecimento::class);
    }

    public function organizador(){
        return $this->belongsTo(Organizador::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
}
