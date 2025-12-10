<?php

require __DIR__.'/../../vendor/autoload.php';

use Adapter\Services\ConciliadorA;
use Adapter\Services\ConciliadorB;
use Adapter\Adapters\AdapterConciliadorA;
use Adapter\Adapters\AdapterConciliadorB;

$conciliador = new ConciliadorB();
$conciliadorAdapter = new AdapterConciliadorB($conciliador);

$conciliadorAdapter->enviarVendas();
$conciliadorAdapter->buscarPagamentos();