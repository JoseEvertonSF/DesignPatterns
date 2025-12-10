<?php

namespace Adapter\Adapters;

use Adapter\Contracts\ConciliadorCartoesInterface;
use Adapter\Services\ConciliadorA;

class AdapterConciliadorA implements ConciliadorCartoesInterface
{   
    private $conciliador;

    public function __construct(ConciliadorA $conciliador)
    {
        $this->conciliador = $conciliador;
    }

    public function enviarVendas()
    {   
        return $this->conciliador->conciliarVendas();
    }

    public function buscarPagamentos()
    {
        return $this->conciliador->concVendasRecebimentos();
    }
}