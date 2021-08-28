<?php

namespace Desafio;
use PHPUnit\Framework\TestCase;
use Mockery;

class FiltroTest extends TestCase
{


    public function testGerar()
    {
        $regras = [3=>'BHUT', 5 =>'BHUT IT', 15=>'BHUT LINIO'];
        $filtro = new Filtro(100, $regras);
       
        $this->assertObjectHasAttribute('item', $filtro);
  
    }
}
?>