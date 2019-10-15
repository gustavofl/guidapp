<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Promocao;
use App\Validator\PromocaoValidator;
use App\Validator\ValidationException;

protected $fillable = [
    'texto', 'dia_semana', 'mes', 'data_inicial', 'data_final'
];

class PromocaoTest extends TestCase
{
    public function testDadosCorretos()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();

        PromocaoValidator::validate($promocao->toArray());

        $this->assertTrue(true);
    }

    public function testTextoVazio()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();
        $promocao->texto = null;

        $this->expectException(ValidationException::class);

        PromocaoValidator::validate($promocao->toArray());
    }

    public function testDiaSemanaInvalido()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();
        $promocao->dia_semana = 9;

        $this->expectException(ValidationException::class);

        PromocaoValidator::validate($promocao->toArray());
    }

    public function testMesInvalido()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();
        $promocao->mes = 0;

        $this->expectException(ValidationException::class);

        PromocaoValidator::validate($promocao->toArray());
    }

    public function testDataInicialInvalida()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();
        $promocao->data_inicial = '15/15/2020';

        $this->expectException(ValidationException::class);

        PromocaoValidator::validate($promocao->toArray());
    }

    public function testDataFinalInvalida()
    {
        $promocao = new Promocao;
        $promocao = factory(\App\Promocao::class)->make();
        $promocao->data_inicial = '8/8/2019';
        $promocao->data_final = '5/8/2019';

        $this->expectException(ValidationException::class);

        PromocaoValidator::validate($promocao->toArray());
    }
}
