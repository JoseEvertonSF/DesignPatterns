<?php

require __DIR__.'/../../vendor/autoload.php';

use Iterator\Pedido;
use Iterator\ListaPedidos;

$pedido1 = new Pedido(1, 'ABC');
$pedido2 = new Pedido(2, 'DEF');
$pedido3 = new Pedido(3, 'HIJ');

$listaPedidos = new ListaPedidos();
$listaPedidos->appendPedido($pedido1);
$listaPedidos->appendPedido($pedido2);
$listaPedidos->appendPedido($pedido3);

foreach($listaPedidos as $pedido)
{   
    echo $pedido->codCliente.PHP_EOL;
}