<?php

namespace Proxy\Entity;

class User
{
    private $nome;
    private $permissao;

    public function __construct(string $nome, string $permissao)
    {
        $this->nome = $nome;
        $this->permissao = $permissao;
    }

    public function permissao()
    {
        return $this->permissao;
    }
}