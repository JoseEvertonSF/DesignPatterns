<?php

namespace Strategy\Factorys;

use Strategy\Strategys\Icms;
use Strategy\Strategys\Pis;
use Strategy\Strategys\Cofins;

// Adicionando Factory para retornar os objetos

class TaxFactory{

    public function create(string $taxType)
    {
        return match(strtoupper($taxType)){
            'ICMS' => new Icms(),
            'PIS' => new Pis(),
            'COFINS' => new Cofins()
        };
    }

}