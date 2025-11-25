<?php

namespace Visitor;

use Visitor\Contracts\DocumentoFiscal;
use Visitor\Contracts\ImpostoVisitor;
use Visitor\NotaFiscalVenda;

class NotaFiscalDevolucao implements DocumentoFiscal
{   
    private ?NotaFiscalVenda $nfReferenciada = null;

    public function setNfReferenciada(NotaFiscalVenda $nfVenda)
    {
        $this->nfReferenciada = $nfVenda;
    }

    public function nfReferenciada()
    {
        return $this->nfReferenciada;
    }

    public function faturarNf()
    {
        echo 'Faturando NF de devolução'.PHP_EOL;
    }

    public function accept(ImpostoVisitor $visitor)
    {
        return $visitor->calculaImpostoNfDevolucao($this);
    }
}