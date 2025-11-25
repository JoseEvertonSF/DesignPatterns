<?php

namespace Visitor\ConcreteVisitors;

use Visitor\Contracts\ImpostoVisitor;
use Visitor\NotaFiscalDevolucao;
use Visitor\NotaFiscalTransferencia;
use Visitor\NotaFiscalVenda;

class CalculadoraImpostosVisitor implements ImpostoVisitor
{
    public function calculaImpostoNfVenda(NotaFiscalVenda $nfVenda)
    {
        $cliente = $nfVenda->cliente();

        if($cliente == null){
            throw new \DomainException('Cliente não pode estar vazio');
        }

        return $nfVenda->valor() * (20.5 / 100);

    }

    public function calculaImpostoNfDevolucao(NotaFiscalDevolucao $nfDevolucao)
    {
        $nfReferenciada = $nfDevolucao->nfReferenciada();

        if($nfReferenciada == null){
            throw new \DomainException('NF referenciada não pode estar vazia');
        }

        return $nfReferenciada->valor() * (18.5 / 100);
    }

    public function calculaImpostoNfTransferencia(NotaFiscalTransferencia $nfTransferencia)
    {
        $filialOrigem = $nfTransferencia->filialOrigem();
        $filialDestino = $nfTransferencia->filialDestino();

        if($filialOrigem == null || $filialDestino == null){
            throw new \DomainException('Filial destino e filial origem devem estar preenchidos');
        }

        return $nfTransferencia->valor() * (10.5 / 100);

    }
}