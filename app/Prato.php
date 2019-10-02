<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prato extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome', 'descricao', 'preco'
    ];

    public function imagem(){
        return $this->hasOne(Imagem::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

    public function tag(){
        return $this->hasMany(Tag::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
}
