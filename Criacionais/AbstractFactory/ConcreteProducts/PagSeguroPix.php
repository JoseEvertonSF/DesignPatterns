<?php

namespace AbstractFactory\ConcreteProducts;
use AbstractFactory\Contracts\AdquirentePagamento;

class PagSeguroPix implements AdquirentePagamento
{
    public function pagar(float $valor): string
    {
        return 'Pagando ' . $valor . ' no PIX pela adquirente Pagseguro';
    }
}
