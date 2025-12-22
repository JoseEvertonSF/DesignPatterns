<?php

namespace AbstractFactory\Contracts;

interface AdquirentePagamento
{
    public function pagar(float $valor): string;
}