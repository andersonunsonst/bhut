<?php
namespace Desafio;

class Desafio
{

    private array $bhut = [];
    private int $qtd_item = 100;
    public  $item;

    public function __construct()
    {
        $regras = [3=>'BHUT', 5 =>'BHUT IT', 15=>'BHUT LINIO'];
        $this->item = new Filtro($this->qtd_item, $regras);

    }
    
}
?>