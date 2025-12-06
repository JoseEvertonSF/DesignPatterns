<?php

require __DIR__.'/../../vendor/autoload.php';

use Proxy\Entity\User;
use Proxy\Entity\Cliente;
use Proxy\ProcessClienteProxy;

$user = new User('José', 'func');
$cliente = new Cliente('Maria', 18);

$processClient = new ProcessClienteProxy($user);
$processClient->process($cliente);