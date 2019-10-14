<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Estabelecimento;
use App\Validator\EstabelecimentoValidator;
use App\Validator\ValidationException;

class EstabelecimentoTest extends TestCase
{
    public function testDadosCorretos()
    {
        $estabelecimento = new Estabelecimento;
        $estabelecimento = factory(\App\Estabelecimento::class)->make();

        EstabelecimentoValidator::validate($estabelecimento->toArray());

        $this->assertTrue(true);
    }

    public function testNomeVazio()
    {
        $estabelecimento = new Estabelecimento;
        $estabelecimento = factory(\App\Estabelecimento::class)->make();
        $estabelecimento->nome = null;

        $this->expectException(ValidationException::class);
        
        EstabelecimentoValidator::validate($estabelecimento->toArray());
    }

    public function testDescricaoVazia()
    {
        $estabelecimento = new Estabelecimento;
        $estabelecimento = factory(\App\Estabelecimento::class)->make();
        $estabelecimento->descricao = null;

        $this->expectException(ValidationException::class);
        
        EstabelecimentoValidator::validate($estabelecimento->toArray());
    }

    public function testTelefoneVazio()
    {
        $estabelecimento = new Estabelecimento;
        $estabelecimento = factory(\App\Estabelecimento::class)->make();
        $estabelecimento->telefone = null;

        $this->expectException(ValidationException::class);
        
        EstabelecimentoValidator::validate($estabelecimento->toArray());
    }

    public function testCalculoAvaliacaoGeral()
    {
        $estabelecimento = new Estabelecimento;
        $estabelecimento = factory(\App\Estabelecimento::class)->make();
        $estabelecimento->save();

        $estabelecimento->avaliacaos()->attach([1 => ['avaliacao' => 3]]);
        $estabelecimento->avaliacaos()->attach([2 => ['avaliacao' => 5]]);

        $this->assertEquals($estabelecimento->getAvaliacaoGeral(), 4); // 4 eh a media
    }
}
