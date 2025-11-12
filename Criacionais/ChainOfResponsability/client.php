<?php

require __DIR__.'/../../vendor/autoload.php';

use ChainOfResponsability\Carga;
use ChainOfResponsability\NfeSaida;
use ChainOfResponsability\Serial;

$faturamentoCarga = new Carga();
$faturamentoCarga->setNext(new NfeSaida())->setNext(new Serial());
$faturamentoCarga->handler();