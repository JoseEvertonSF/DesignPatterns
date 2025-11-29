<?php

namespace Decorator;

use Decorator\Contracts\ItemPedidoInterface;
use Decorator\ItemPedidoDecorator;

class ItemPedidoIpi extends ItemPedidoDecorator
{   
    private ItemPedidoInterface $itemPedido;

    public function __construct(ItemPedidoInterface $itemPedido)
    {   
        parent::__construct($itemPedido);
        $this->itemPedido = $itemPedido;
    }   

    public function preco() : float
    {   
        $preco = $this->itemPedido->preco();
        return ($preco * (20 / 100)) + $preco;
    }
}