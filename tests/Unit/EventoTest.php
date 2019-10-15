<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Evento;
use App\Validator\EventoValidator;
use App\Validator\ValidationException;

class EventoTest extends TestCase
{
    public function testDadosCorretos()
    {
        $evento = new Evento;
        $evento = factory(\App\Evento::class)->make();

        EventoValidator::validate($evento->toArray());

        $this->assertTrue(true);
    }

    public function testNomeVazio()
    {
        $evento = new Evento;
        $evento = factory(\App\Evento::class)->make();
        $evento->nome = null;

        $this->expectException(ValidationException::class);
        
        EventoValidator::validate($evento->toArray());
    }

    public function testDescricaoVazia()
    {
        $evento = new Evento;
        $evento = factory(\App\Evento::class)->make();
        $evento->descricao = null;

        $this->expectException(ValidationException::class);
        
        EventoValidator::validate($evento->toArray());
    }

    public function testCalculoAvaliacaoGeral()
    {
        $evento = new Evento;
        $evento = factory(\App\Evento::class)->make();
        $evento->save();

        $evento->avaliacaos()->attach([1 => ['avaliacao' => 3]]);
        $evento->avaliacaos()->attach([2 => ['avaliacao' => 5]]);

        $this->assertEquals($evento->getAvaliacaoGeral(), 4); // 4 eh a media
    }
}
