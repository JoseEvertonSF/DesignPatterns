<?php

namespace Decorator;

use Decorator\Contracts\ItemPedidoInterface;

abstract class ItemPedidoDecorator implements ItemPedidoInterface
{
    private ItemPedidoInterface $itemPedido;

    public function __construct(ItemPedidoInterface $itemPedido)
    {
        $this->itemPedido = $itemPedido;
    }

    abstract public function preco(): float;

    public function codProduto() : int
    {
        return $this->itemPedido->codProduto();
    }
}