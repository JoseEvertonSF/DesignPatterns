<?php

namespace AbstractFactory\ConcreteProducts;
use AbstractFactory\Contracts\AdquirentePagamento;

class PagSeguroCartao implements AdquirentePagamento
{
    public function pagar(float $valor): string
    {
        return 'Pagando ' . $valor . ' no cartão pela adquirente Pagseguro';
    }
}