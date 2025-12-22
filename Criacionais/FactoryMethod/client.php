<?php

require __DIR__.'/../../vendor/autoload.php';

use FactoryMethod\Creators\PagamentoCartaoFactory;
use FactoryMethod\Creators\PagamentoPixFactory;

$pagamentoPix = new PagamentoPixFactory();
echo $pagamentoPix->realizarPagamento(100.50) . PHP_EOL;

$pagamentoCartao = new PagamentoCartaoFactory();
echo $pagamentoCartao->realizarPagamento(1000.50) . PHP_EOL;;