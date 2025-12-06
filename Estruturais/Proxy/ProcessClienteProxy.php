<?php

namespace Proxy;

use Proxy\Contracts\ProcessClienteInterface;
use Proxy\Entity\Cliente;
use Proxy\Entity\User;
use Proxy\ProcessCliente;

class ProcessClienteProxy implements ProcessClienteInterface
{   
    private User $user; 
    private ProcessCliente $processCliente;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->processCliente = new ProcessCliente();
    }

    public function process(Cliente $cliente)
    {   
        if($this->user->permissao() !== 'adm') {
            throw new \DomainException('Você não tem permissão para cadastrar clientes!');
        }

        $this->processCliente->process($cliente);
    }
}