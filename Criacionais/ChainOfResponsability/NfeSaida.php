<?php

namespace ChainOfResponsability;

use ChainOfResponsability\AbstractFaturamentoHandler;

class NfeSaida extends AbstractFaturamentoHandler
{   
    public function handler()
    {   
        $this->gerarNf();
        return parent::handler();
    }

    public function gerarNf()
    {
        echo 'Gerando NFE de saída'.PHP_EOL;
    }
}