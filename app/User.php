<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function imagem(){
        return $this->hasOne(Imagem::class);
    }

    public function avaliacaoEstabelecimento(){
        return $this->hasMany(Avaliacao_estabelecimento::class);
    }

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }

    public function avaliacaoEvento(){
        return $this->hasMany(Avaliacao_evento::class);
    }

    public function organizador(){
        return $this->hasOne(Organizador::class);
    }

    public function vendaIngresso(){
        return $this->hasMany(VendaIngresso::class);
    }

    public function pagamento(){
        return $this->hasMany(Pagamento::class);
    }
}
