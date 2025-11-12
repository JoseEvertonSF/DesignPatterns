<?php

require __DIR__.'/../../vendor/autoload.php';

use Strategy\Strategys\TaxCalculator;
use Strategy\Factorys\TaxFactory;

$amount = 1800.00;
$taxCalculator = new TaxCalculator();
$taxFactory = new TaxFactory();
echo $taxCalculator->calculate($taxFactory->create('ICMS'), $amount).PHP_EOL;
echo $taxCalculator->calculate($taxFactory->create('PIS'), $amount).PHP_EOL;
echo $taxCalculator->calculate($taxFactory->create('COFINS'), $amount).PHP_EOL;