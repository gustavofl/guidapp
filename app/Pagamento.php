<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    private $fillable = [
        'valor', 'data_hora', 'id_pag_paypal'
    ];
}
