<?php

namespace ChainOfResponsability;

use ChainOfResponsability\Contracts\FaturamentoHandler;

class AbstractFaturamentoHandler implements FaturamentoHandler
{
    protected ?FaturamentoHandler $next = null;

    public function setNext(FaturamentoHandler $next)
    {
        $this->next = $next;
        return $next;
    }

    public function handler()
    {
        if($this->next){
            return $this->next->handler();
        }
    }
}
