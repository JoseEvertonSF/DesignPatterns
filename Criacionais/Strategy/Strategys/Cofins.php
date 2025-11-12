<?php

namespace Strategy\Strategys;

use Strategy\Contracts\TaxType;

class Cofins implements TaxType{

    public function calculate(float $amount) : float
    {
        return ($amount * 7.6) / 100;
    }
    
}