<?php

require __DIR__.'/../../vendor/autoload.php';

use Builder\QueryBuilder;

$query = new QueryBuilder('pedidos');

echo $query
    ->select(['empresa', 'filial', 'pedido'])
    ->where([
        'empresa' => 1,
        'filial'  => 99,
    ])
    ->orderBy(['pedido'])
    ->limit(100)
    ->get();