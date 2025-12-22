<?php

require __DIR__.'/../../vendor/autoload.php';

use AbstractFactory\Creators\PagSeguroAbstractFactory;
use AbstractFactory\Creators\RedeCardAbstractFactory;

$pagSeguroCartao = PagSeguroAbstractFactory::createPagamentoCartao();
echo $pagSeguroCartao->pagar(32.90) . PHP_EOL;

$pagSeguroPix = PagSeguroAbstractFactory::createPagamentoPix();
echo $pagSeguroPix->pagar(89.79) . PHP_EOL;

$redeCardCartao = PagSeguroAbstractFactory::createPagamentoCartao();
echo $redeCardCartao->pagar(60.70) . PHP_EOL;

$redeCardPix = PagSeguroAbstractFactory::createPagamentoPix();
echo $redeCardPix->pagar(12.36) . PHP_EOL;