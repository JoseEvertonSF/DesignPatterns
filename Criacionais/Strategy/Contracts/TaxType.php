<?php
  
namespace Strategy\Contracts;

interface TaxType{
    public function calculate(float $amount) : float;
}
