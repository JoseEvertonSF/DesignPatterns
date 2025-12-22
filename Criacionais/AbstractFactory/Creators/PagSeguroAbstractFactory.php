<?php

namespace AbstractFactory\Creators;

use AbstractFactory\Contracts\AdquirenteAbstractFactoryInterface;
use AbstractFactory\Contracts\AdquirentePagamento;
use AbstractFactory\ConcreteProducts\PagSeguroCartao;
use AbstractFactory\ConcreteProducts\PagSeguroPix;

class PagSeguroAbstractFactory implements AdquirenteAbstractFactoryInterface
{
    public static function createPagamentoCartao(): AdquirentePagamento
    {
        return new PagSeguroCartao();
    }

    public static function createPagamentoPix(): AdquirentePagamento
    {
        return new PagSeguroPix();
    }
}
