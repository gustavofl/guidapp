<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacao_evento extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'avaliacao'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
