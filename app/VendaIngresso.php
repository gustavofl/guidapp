<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaIngresso extends Model
{
    protected $fillable = [
        'hash', 'usado', 'validado'
    ];

    public function ingresso(){
        return $this->hasOne(Ingresso::class);
    }

    public function pagamento(){
        return $this->hasMany(Pagamento::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
