<?php

require __DIR__.'/../../vendor/autoload.php';

use Visitor\ConcreteVisitors\CalculadoraImpostosVisitor;
use Visitor\NotaFiscalDevolucao;
use Visitor\NotaFiscalTransferencia;
use Visitor\NotaFiscalVenda;

$visitor = new CalculadoraImpostosVisitor();
$nfVenda = new NotaFiscalVenda();
$nfVenda->setCliente('ABCDEF');
$nfVenda->setValor(1500.89);
$nfVenda->faturarNf();
echo $nfVenda->accept($visitor).PHP_EOL;

$nfDevolucao = new NotaFiscalDevolucao();
$nfDevolucao->setNfReferenciada($nfVenda);
$nfDevolucao->faturarNf();
echo $nfDevolucao->accept($visitor).PHP_EOL;

$nfTransferencia = new NotaFiscalTransferencia();
$nfTransferencia->setFilialOrigem(25);
$nfTransferencia->setFilialDestino(2);
$nfTransferencia->setValor(2000.89);
$nfTransferencia->faturarNf();
echo $nfTransferencia->accept($visitor).PHP_EOL;
