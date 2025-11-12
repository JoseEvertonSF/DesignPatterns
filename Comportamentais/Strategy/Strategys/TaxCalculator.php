<?php

namespace Strategy\Strategys;

use Strategy\Contracts\TaxType;

class TaxCalculator{

    public function calculate(TaxType $tax, $amount) : float
    {
      return $tax->calculate($amount);
    }

}
