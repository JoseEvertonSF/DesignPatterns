<?php

namespace AbstractFactory\Creators;

use AbstractFactory\Contracts\AdquirenteAbstractFactoryInterface;
use AbstractFactory\Contracts\AdquirentePagamento;
use AbstractFactory\ConcreteProducts\RedeCardCartao;
use AbstractFactory\ConcreteProducts\RedeCardPix;

class RedeCardAbstractFactory implements AdquirenteAbstractFactoryInterface
{
    public static function createPagamentoCartao(): AdquirentePagamento
    {
        return new RedeCardCartao();
    }

    public static function createPagamentoPix(): AdquirentePagamento
    {
        return new RedeCardPix();
    }
}