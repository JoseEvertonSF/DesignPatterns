<?php

namespace Strategy\Strategys;

use Strategy\Contracts\TaxType;

class Icms implements TaxType{

    public function calculate(float $amount) : float
    {
        return ($amount * 18) / 100;
    }

}