<?php

namespace Iterator;

use \Iterator;
use Iterator\ListaPedidos;

class ListaPedidosIterator implements Iterator
{
    private $position = 0;

    public function __construct(private array $pedidos)
    {
        $this->position = 0;
    }

    public function rewind() : void
    {
        $this->position = 0;
    }

    public function current() : mixed
    {
        return $this->pedidos[$this->position];
    }

    public function key() : int
    {
        return $this->position;
    }

    public function next() : void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->pedidos[$this->position]);
    }
}