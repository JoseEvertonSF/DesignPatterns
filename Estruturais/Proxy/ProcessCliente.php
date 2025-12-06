<?php

namespace Proxy;

use Proxy\Contracts\ProcessClienteInterface;
use Proxy\Entity\Cliente;

class ProcessCliente implements ProcessClienteInterface
{
    public function process(Cliente $cliente)
    {
        echo 'Chamando repository e salvando cliente no banco de dados'.PHP_EOL;
    }
}