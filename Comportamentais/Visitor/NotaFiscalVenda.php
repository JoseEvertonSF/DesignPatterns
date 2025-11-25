<?php

namespace Visitor;

use Visitor\Contracts\DocumentoFiscal;
use Visitor\Contracts\ImpostoVisitor;

class NotaFiscalVenda implements DocumentoFiscal
{   
    private ?string $cliente = null;
    private float $valor;

    public function setCliente(string $cliente)
    {
        $this->cliente = $cliente;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function cliente()
    {
        return $this->cliente;
    }

    public function valor()
    {
        return $this->valor;
    }
    
    public function faturarNf()
    {
        echo 'Faturando NF de venda'.PHP_EOL;
    }

    public function accept(ImpostoVisitor $visitor)
    {
        return $visitor->calculaImpostoNfVenda($this);
    }
}