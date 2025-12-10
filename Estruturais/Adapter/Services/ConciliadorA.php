<?php

namespace Adapter\Services;

class ConciliadorA
{
    public function conciliarVendas()
    {
        echo 'Enviando vendas do conciliador A via json'.PHP_EOL;
    }

    public function concVendasRecebimentos()
    {
        echo 'Retornando vendas pagas do conciliador A via json'.PHP_EOL; 
    }
}