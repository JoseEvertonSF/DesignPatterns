<?php

namespace FactoryMethod\Creators;

use FactoryMethod\Creators\MetodoPagamentoFactory;
use FactoryMethod\ConcreteProducts\PagamentoPix;
use FactoryMethod\Contracts\MetodoPagamento;

class PagamentoPixFactory extends MetodoPagamentoFactory
{
    public function criarMetodoPagamento(): MetodoPagamento
    {
        return new PagamentoPix();
    }
}