<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingresso extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'descricao', 'preco', 'quantidade', 'desconto', 'dt_fim_promocao'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function vendaIngresso(){
        return $this->belongsToMany(VendaIngresso::class);
    }
}
