<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao_estabelecimento extends Model
{
    protected $fillable = [
        'avaliacao'
    ];

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
