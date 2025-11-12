<?php

namespace Observer\Observed;

use Observer\Contracts\PedidoObserver;

class Pedido{

    private array $observers = [];
    public int $idPedido = 1;

    public function appendObserver(PedidoObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function recebePedido()
    {
        echo 'Pedido '.$this->idPedido.' recebido'.PHP_EOL;
    }

    public function executeObservers()
    {
        foreach($this->observers as $observer){
            $observer->execute($this->idPedido);
        }

        echo 'Fluxo do pedido '.$this->idPedido.' encerrado'.PHP_EOL;
    }
}