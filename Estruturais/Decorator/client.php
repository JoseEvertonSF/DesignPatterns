<?php

require __DIR__.'/../../vendor/autoload.php';

use Decorator\ItemPedido;
use Decorator\ItemPedidoDesconto;
use Decorator\ItemPedidoIpi;

$itemPedido = new ItemPedido(1500.00, 123456);
echo 'Preço normal do produto '.$itemPedido->codProduto().': '.$itemPedido->preco().PHP_EOL;
$itemPedidoDesconto = new ItemPedidoDesconto($itemPedido);
echo 'Preço com desconto do produto '.$itemPedidoDesconto->codProduto().': '.$itemPedidoDesconto->preco().PHP_EOL;
$itemPedidoIpi = new ItemPedidoIpi($itemPedidoDesconto);
echo 'Preço com desconto produto '.$itemPedidoIpi->codProduto().': '.$itemPedidoIpi->preco().PHP_EOL;