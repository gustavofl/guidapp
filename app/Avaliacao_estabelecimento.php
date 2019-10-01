<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacao_estabelecimento extends Model
{
    use SoftDeletes;
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
