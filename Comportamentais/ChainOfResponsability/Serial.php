<?php

namespace ChainOfResponsability;

use ChainOfResponsability\AbstractFaturamentoHandler;

class Serial extends AbstractFaturamentoHandler
{   
    public function handler()
    {   
        $this->movimentar();
        return parent::handler();
    }

    public function movimentar()
    {
        echo 'Movimentando Seriais'.PHP_EOL;
    }
}