<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'abertura', 'fechamento', 'dia_semana'
    ];

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }
}
