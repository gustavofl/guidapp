<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaIngresso extends Model
{
    private $fillable = [
        'hash', 'usado', 'validado'
    ];
}
