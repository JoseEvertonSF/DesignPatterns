<?php

namespace Decorator;

use Decorator\Contracts\ItemPedidoInterface;

class ItemPedido implements ItemPedidoInterface
{
    private float $preco;
    private int $codProduto;

    public function __construct(float $preco, int $codProduto)
    {
        $this->preco = $preco;
        $this->codProduto = $codProduto;
    }

    public function preco() : float
    {
        return $this->preco;
    }

    public function codProduto() : int
    {
        return $this->codProduto;
    }
}