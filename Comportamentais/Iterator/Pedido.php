<?php

namespace Iterator;

class Pedido{
    public int $idPedido;
    public string $codCliente;

    public function __construct(int $idPedido, string $codCliente)
    {
        $this->idPedido = $idPedido;
        $this->codCliente = $codCliente;
    }
}