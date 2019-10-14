<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstabelecimentoUser extends Pivot
{
    use SoftDeletes;
}
