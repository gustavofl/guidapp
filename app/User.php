<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'cpf',
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

    public static $rules = [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ];

    public static $messages = [
        'required' => 'O campo :attribute é obrigatório',
        'password:min' => 'A senha deve ter no mínimo 8 caracteres',
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

    public function tornarOrganizador($cpf) {

    }
}
