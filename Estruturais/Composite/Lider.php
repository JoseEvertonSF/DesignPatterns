<?php

namespace Composite;

use Composite\Contracts\FuncionarioInterface;

class Lider implements FuncionarioInterface
{   
    private string $nome;
    private array $liderados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function addLiderado(FuncionarioInterface $liderado)
    {
        $this->liderados[] = $liderado;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLiderados()
    {   
        if($this->liderados == []){
            return $this->liderados;
        }
        
        echo $this->getNome().PHP_EOL;
        foreach($this->liderados as $key => $liderado)
        {
            echo $key."-".$liderado->getNome().PHP_EOL;
            $liderados2 = $liderado->getLiderados();
        }
    }
}