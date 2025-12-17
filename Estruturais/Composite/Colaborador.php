<?php

namespace Composite;

use Composite\Contracts\FuncionarioInterface;

class Colaborador implements FuncionarioInterface
{   
    private string $nome;
    private array $liderados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLiderados()
    {
        return $this->liderados;
    }
}