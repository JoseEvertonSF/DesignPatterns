<?php

namespace Proxy\Entity;

class Cliente
{
    private $nome;
    private $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}