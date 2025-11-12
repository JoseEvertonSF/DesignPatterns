<?php

namespace Observer\Observers;
use Observer\Contracts\PedidoObserver;

class GerarNfPedido implements PedidoObserver{

    public function execute(int $idPedido)
    {
        echo 'NF do pedido '.$idPedido.' gerada'.PHP_EOL; 
    }
}