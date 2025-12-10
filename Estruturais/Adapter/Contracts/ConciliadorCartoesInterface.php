<?php

namespace Adapter\Contracts;

interface ConciliadorCartoesInterface
{
    public function enviarVendas();
    public function buscarPagamentos();
}