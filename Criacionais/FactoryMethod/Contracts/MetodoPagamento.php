<?php

namespace FactoryMethod\Contracts;

interface MetodoPagamento
{
    public function pagar(float $valor): string;
}
