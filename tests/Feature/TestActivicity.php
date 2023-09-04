<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestActivicity extends TestCase
{
    /**
     * Um exemplo de teste usando assert true.
     *
     * @return void
     */
    public function test_assert_true()
    {
        $this->assertTrue(true); //verdadeiro retorna que passou
    }

    
     
    public function test_assert_equals()
    {
        $this->assertEquals(27, 2023- 1996  );//fiz o ano atual menos o ano de nascimento meu
    }

    
     
    public function test_assert_contains()
    {
        $nomeCompleto = ['Marcos', 'Vinicius', 'De', 'Oliveira'];
        $this->assertContains('Vinicius', $nomeCompleto); //confere se o nome vinicius está dentro da array se tiver passara no teste senão ocorre uma falha
    }
}
