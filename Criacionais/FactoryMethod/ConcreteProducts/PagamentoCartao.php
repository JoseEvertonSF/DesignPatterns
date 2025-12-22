<?php

namespace FactoryMethod\ConcreteProducts;

use FactoryMethod\Contracts\MetodoPagamento;

class PagamentoCartao implements MetodoPagamento
{
    public function pagar(float $valor): string
    {
        return 'Realizando pagamento cartão de ' . $valor;
    }
}
