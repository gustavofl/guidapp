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

    public static $rules = [
        'nome' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'descricao' => 'required',
        'telefone' => 'required',
        'cidade' => 'required',
    ];

    public static $messages = [
        'required' => 'O campo :attribute é obrigatório',
    ];

    public function eventos(){
        return $this->hasMany(Evento::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }

    public function pratos(){
        return $this->hasMany(Prato::class);
    }

    public function promocaos(){
        return $this->hasMany(Promocao::class);
    }

    public function imagems(){
        return $this->hasMany(Imagem::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }

    public function avaliacaos(){
        return $this->belongsToMany(User::class)->using(EstabelecimentoUser::class)->withPivot('avaliacao');
    }

    public function organizador(){
        return $this->belongsTo(User::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
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
