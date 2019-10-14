<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;
use App\Validator\UserValidator;
use App\Validator\ValidationException;

class UserTest extends TestCase
{
    public function testDadosCorreto()
    {
        $user = new User;
        $user = factory(\App\User::class)->make();

        UserValidator::validate(array_merge($user->toArray(), ['password' => $user->password]));

        $this->assertTrue(true);
    }

    public function testNomeVazio()
    {
        $user = new User;
        $user = factory(\App\User::class)->make();
        $user->name = null;

        $this->expectException(ValidationException::class);
        
        UserValidator::validate(array_merge($user->toArray(), ['password' => $user->password]));
    }

    public function testEmailVazio()
    {
        $user = new User;
        $user = factory(\App\User::class)->make();
        $user->email = null;

        $this->expectException(ValidationException::class);
        
        UserValidator::validate(array_merge($user->toArray(), ['password' => $user->password]));
    }

    public function testSenhaVazia()
    {
        $user = new User;
        $user = factory(\App\User::class)->make();
        $user->password = null;

        $this->expectException(ValidationException::class);
        
        UserValidator::validate(array_merge($user->toArray(), ['password' => $user->password]));
    }
}
