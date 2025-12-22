<?php

namespace FactoryMethod\Creators;

use FactoryMethod\Creators\MetodoPagamentoFactory;
use FactoryMethod\ConcreteProducts\PagamentoCartao;
use FactoryMethod\Contracts\MetodoPagamento;

class PagamentoCartaoFactory extends MetodoPagamentoFactory
{
    public function criarMetodoPagamento(): MetodoPagamento
    {
        return new PagamentoCartao();
    }
}
