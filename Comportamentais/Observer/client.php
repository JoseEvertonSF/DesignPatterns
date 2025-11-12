<?php

require __DIR__.'/../../vendor/autoload.php';

use Observer\Observed\Pedido;
use Observer\Observers\EnviarEmailCliente;
use Observer\Observers\GerarNfPedido;

$pedido = new Pedido();
$pedido->appendObserver(new GerarNfPedido());
$pedido->appendObserver(new EnviarEmailCliente());
$pedido->recebePedido();
$pedido->executeObservers();