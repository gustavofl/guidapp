<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organizador extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'cpf'
    ];

    public function evento(){
        return $this->hasOne(Evento::class);
    }

    public function estabelecimento(){
        return $this->hasMany(Estabelecimento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
