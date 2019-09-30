<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    protected $fillable = [
        'cpf', 'user_id'
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
