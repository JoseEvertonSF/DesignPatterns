<?php

namespace Facade;

use Facade\EnviarNf;
use Facade\GerarBordero;
use Facade\GerarNf;

class FaturamentoWmsFacade
{   
    private $enviarNf;
    private $gerarBordero;
    private $gerarNf;

    public function __construct()
    {   
        $this->enviarNf = new EnviarNf();
        $this->gerarBordero = new GerarBordero();
        $this->gerarNf = new GerarNf();
    }
    
    public function faturamento()
    {
        $this->enviarNf->enviar();
        $this->gerarBordero->gerar();
        $this->gerarNf->gerar();
    }
}