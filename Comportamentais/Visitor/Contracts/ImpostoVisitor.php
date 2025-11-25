<?php

namespace Visitor\Contracts;

use Visitor\NotaFiscalDevolucao;
use Visitor\NotaFiscalTransferencia;
use Visitor\NotaFiscalVenda;

interface ImpostoVisitor
{
    public function calculaImpostoNfVenda(NotaFiscalVenda $nfVenda);
    public function calculaImpostoNfDevolucao(NotaFiscalDevolucao $nfDevolucao);
    public function calculaImpostoNfTransferencia(NotaFiscalTransferencia $nfTransferencia);
}