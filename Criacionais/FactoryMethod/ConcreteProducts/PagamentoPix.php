<?php

namespace FactoryMethod\ConcreteProducts;

use FactoryMethod\Contracts\MetodoPagamento;

class PagamentoPix implements MetodoPagamento
{
    public function pagar(float $valor): string
    {
        return 'Realizando pagamento PIX de ' . $valor;
    }
}