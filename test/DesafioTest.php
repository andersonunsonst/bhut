<?php

namespace Desafio;
use PHPUnit\Framework\TestCase;
use Mockery;

class DesafioTest extends TestCase
{
    function testDesafio(){
        
        $regras = [3=>'BHUT', 5 =>'BHUT IT', 15=>'BHUT LINIO'];
        $desafio = new Desafio(100, $regras);
        $this->assertObjectHasAttribute('item', $desafio);
    }
}
?>