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

    public function imagems(){
        return $this->hasMany(Imagem::class);
    }
    
    public function tags(){
        return $this->hasMany(Tag::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function avaliacaos(){
        return this->belongsToMany(User::class)->using(EventoUser::class)->withPivot('avaliacao');
    }

    public function organizador(){
        return $this->belongsTo(User::class);
    }

    public function ingressos(){
        return $this->hasMany(Ingresso::class);
    }

    public function impulsionamentos(){
        return $this->hasMany(Impulsionamento::class);
    }

    public function eventoUnicos(){
        return $this->hasMany(EventoUnico::class);
    }

    public function festivals(){
        return $this->hasMany(Festival::class);
    }

    public function getAvaliacaoGeral(){
        $qnt = $this->avaliacaos->count();
        $soma = 0;

        // var_dump($this->avaliacaos);

        foreach ($this->avaliacaos as $avaliacao) {
            $soma += $avaliacao->pivot->avaliacao;
        }

        if($qnt > 0) {
            return $soma/$qnt;
        }

        return 0;
    }
}
