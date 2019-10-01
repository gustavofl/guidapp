<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'texto'
    ];

    public function atracao(){
        return $this->belongsTo(Atracao::class);
    }
}
