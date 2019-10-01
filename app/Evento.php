<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome', 'descricao', 'avaliacao', 'visitas', 'hash'
    ];

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }
    
    public function tag(){
        return $this->hasMany(Tag::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }

    public function avaliacao(){
        return $this->hasMany(Avaliacao_evento::class);
    }

    public function organizador(){
        return $this->belongsTo(Organizador::class);
    }

    public function ingresso(){
        return $this->hasMany(Ingresso::class);
    }

    public function impulsionamento(){
        return $this->hasMany(Impulsionamento::class);
    }

    public function eventoUnico(){
        return $this->hasMany(EventoUnico::class);
    }

    public function festival(){
        return $this->hasMany(Festival::class);
    }
}
