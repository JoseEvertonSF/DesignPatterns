<?php

namespace AbstractFactory\Contracts;

interface AdquirenteAbstractFactoryInterface
{
    public static function createPagamentoCartao(): AdquirentePagamento;

    public static function createPagamentoPix(): AdquirentePagamento;
}