<?php

namespace ChainOfResponsability\Contracts;

interface FaturamentoHandler{
    public function setNext(FaturamentoHandler $next);
    public function handler();
}