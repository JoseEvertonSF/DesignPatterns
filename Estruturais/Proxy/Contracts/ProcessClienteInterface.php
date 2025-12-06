<?php

namespace Proxy\Contracts;

use Proxy\Entity\Cliente;

interface ProcessClienteInterface
{
    public function process(Cliente $cliente);
}