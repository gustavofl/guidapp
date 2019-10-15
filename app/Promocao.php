<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocao extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'texto', 'dia_semana', 'mes', 'data_inicial', 'data_final'
    ];

    public static $rules = [
        'texto' => 'required',
        'dia_semana' => 'required|integer|min:1|max:7',
        'mes' => 'required|integer|min:1|max:12',
        'data_inicial' => 'required|date',
        'data_final' => 'required|date|after:data_inicial',
    ];

    public static $messages = [
        'required' => 'O campo :attribute é obrigatório',
        'dia_semana:integer|min|max' => 'O dia da semana deve ser um número inteiro entre 1 e 7',
        'mes:integer|min|max' => 'O mês deve ser um número inteiro entre 1 e 12',
        'data_inicial:date' => 'A data inicial deve ser uma data válida',
        'data_final:date|after' => 'A data inicial deve ser uma data válida posterior a data final',
    ];

    public function imagems(){
        return $this->hasMany(Imagem::class);
    }

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }
}
