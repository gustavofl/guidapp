<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagamento extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'valor', 'data_hora', 'id_pag_paypal'
    ];

    public function impulsionamento(){
        return $this->belongsToMany(Impulsionamento::class);
    }

    public function vendaIngresso(){
        return $this->belongsToMany(VendaIngresso::class);
    }

    public function Usuario(){
        return $this->belongsTo(User::class);
    }
}
