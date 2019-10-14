<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Prato;
use App\Validator\PratoValidator;
use App\Validator\ValidationException;

class PratoTest extends TestCase
{
    public function testDadosCorretos()
    {
        $prato = new Prato;
        $prato = factory(\App\Prato::class)->make();

        PratoValidator::validate($prato->toArray());

        $this->assertTrue(true);
    }

    public function testNomeVazio()
    {
        $prato = new Prato;
        $prato = factory(\App\Prato::class)->make();
        $prato->nome = null;

        $this->expectException(ValidationException::class);

        PratoValidator::validate($prato->toArray());
    }

    public function testDescricaoVazia()
    {
        $prato = new Prato;
        $prato = factory(\App\Prato::class)->make();
        $prato->descricao = null;

        $this->expectException(ValidationException::class);

        PratoValidator::validate($prato->toArray());
    }

    public function testPrecoInvalido()
    {
        $prato = new Prato;
        $prato = factory(\App\Prato::class)->make();
        $prato->preco = -8;

        $this->expectException(ValidationException::class);

        PratoValidator::validate($prato->toArray());
    }
}
