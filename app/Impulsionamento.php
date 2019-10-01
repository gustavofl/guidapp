<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impulsionamento extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'data_inicial', 'data_final', 'preco_dia', 'data_compra'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function pagamento(){
        return $this->hasOne(Pagamento::class);
    }
}
