<?php

namespace Adapter\Adapters;

use Adapter\Contracts\ConciliadorCartoesInterface;
use Adapter\Services\ConciliadorB;

class AdapterConciliadorB implements ConciliadorCartoesInterface
{   
    private $conciliador;

    public function __construct(ConciliadorB $conciliador)
    {
        $this->conciliador = $conciliador;
    }

    public function enviarVendas()
    {
        return $this->conciliador->vendas();
    }

    public function buscarPagamentos()
    {
        return $this->conciliador->pagamentos();
    }
}