<?php

namespace Observer\Contracts;

interface PedidoObserver
{
    public function execute(int $idPedido);
}