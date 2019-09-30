<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    private $fillable = [
        'descricao', 'preco', 'quantidade', 'desconto', 'dt_fim_promocao'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

    public function vendaIngresso(){
        return $this->belongsToMany(VendaIngresso::class);
    }
}
