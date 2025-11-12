<?php

namespace Observer\Observers;
use Observer\Contracts\PedidoObserver;

class EnviarEmailCliente implements PedidoObserver{

    public function execute(int $idPedido)
    {
        echo 'Email de confirmação do pedido '.$idPedido.' enviado'.PHP_EOL; 
    }
}