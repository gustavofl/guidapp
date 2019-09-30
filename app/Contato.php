<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'texto'
    ];

    public function atracao(){
        return $this->belongsTo(Atracao::class);
    }
}
