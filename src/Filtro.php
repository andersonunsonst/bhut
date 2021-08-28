<?php

namespace Desafio;

class Filtro{

    public array $item;
    private int $qtd_item;
    private array $regras;

    public function __construct(int $qtd_item, array $regras)
    {
        $this->qtd_item = $qtd_item;
        $this->regras = $regras;
        $this->gerar();
    }

    public function gerar():void
    {
        
        for($i=1;$i<$this->qtd_item;$i++)
        {
            $this->item[$i] = $i;
          
            foreach($this->regras as $multiplicador=>$regra)
            {
                $this->verificaMultiplo($i, $multiplicador, $regra);
            }
            
        }

    }

    private function verificaMultiplo(int $item, int $multiplo, string $mensagem):void
    {
        if($item % $multiplo === 0){
            $this->item[$item] = $mensagem;
        }

    }
    
}

?>