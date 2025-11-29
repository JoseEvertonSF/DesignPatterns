<?php

namespace Decorator;

use Decorator\Contracts\ItemPedidoInterface;
use Decorator\ItemPedidoDecorator;

class ItemPedidoDesconto extends ItemPedidoDecorator
{   
    private ItemPedidoInterface $itemPedido;

    public function __construct(ItemPedidoInterface $itemPedido)
    {   
        parent::__construct($itemPedido);
        $this->itemPedido = $itemPedido;
    }   

    public function preco() : float
    {   
        $desconto = 30 / 100;
        $preco = $this->itemPedido->preco();
        
        return $preco - ($preco * $desconto);
    }
}