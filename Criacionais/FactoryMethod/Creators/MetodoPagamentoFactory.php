<?php

namespace FactoryMethod\Creators;

use FactoryMethod\Contracts\MetodoPagamento;

abstract class MetodoPagamentoFactory
{
    abstract public function criarMetodoPagamento(): MetodoPagamento;

    public function realizarPagamento(float $valor): string
    {
        $metodoPagamento = $this->criarMetodoPagamento();
        return $metodoPagamento->pagar($valor);
    }
}