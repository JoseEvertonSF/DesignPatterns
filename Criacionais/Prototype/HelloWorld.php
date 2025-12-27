<?php

namespace Prototype;

use Prototype\Contracts\Prototype;

class HelloWorld implements Prototype
{
    public string $mensagem = 'Hello World';
    public string $dataHora;

    public function __construct()
    {
        $this->dataHora = date('d-m-Y H:i:s');
    }

    public function __clone()
    {
        $this->mensagem = 'Copia de ' . $this->mensagem;
    }
}