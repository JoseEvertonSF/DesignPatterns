<?php

namespace Strategy\Strategys;

use Strategy\Contracts\TaxType;

class Pis implements TaxType{

    public function calculate(float $amount) : float
    {
        return ($amount * 0.65) / 100;
    }
    
}
