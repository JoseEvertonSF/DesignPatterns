<?php

namespace Visitor;

use Visitor\Contracts\DocumentoFiscal;
use Visitor\Contracts\ImpostoVisitor;

class NotaFiscalTransferencia implements DocumentoFiscal
{   
    private ?int $filialOrigem = null;
    private ?int $filialDestino = null;
    private float $valor;

    public function setFilialOrigem(int $filialOrigem)
    {
        $this->filialOrigem = $filialOrigem;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function valor()
    {
        return $this->valor;
    }

    public function setFilialDestino(int $filialDestino)
    {
        $this->filialDestino = $filialDestino;
    }

    public function filialOrigem()
    {
        return $this->filialOrigem;
    }

    public function filialDestino()
    {
        return $this->filialDestino;
    }

    public function faturarNf()
    {
        echo 'Faturando NF de transferência'.PHP_EOL;
    }

    public function accept(ImpostoVisitor $visitor)
    {
        return $visitor->calculaImpostoNfTransferencia($this);
    }

}