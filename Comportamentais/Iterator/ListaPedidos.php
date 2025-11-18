<?php

namespace Iterator;

use Iterator\Pedido;
use \IteratorAggregate;
use Iterator\ListaPedidosIterator;
use \Traversable;

class ListaPedidos implements IteratorAggregate
{   
    private array $lista = [];

    public function appendPedido(Pedido $pedido)
    {
        $this->lista[] = $pedido; 
    }

    public function getIterator() : Traversable
    {
        return new ListaPedidosIterator($this->lista);
    }
    
}