<?php

namespace ChainOfResponsability;

use ChainOfResponsability\AbstractFaturamentoHandler;

class Carga extends AbstractFaturamentoHandler
{   
    public function handler()
    {   
        $this->faturar();
        return parent::handler();
    }

    public function faturar()
    {
        echo 'Faturando carga'.PHP_EOL;
    }
}