<?php

namespace Flyweight;

use Flyweight\IphoneFlyweight;

class Iphone 
{ 
    private float $preco; 
    private string $cor; 
    private string $modelo; 
    private IphoneFlyweight $infoSistema; 
    public function __construct( float $preco, string $cor, string $modelo, IphoneFlyweight $infoSistema) 
    { 
        $this->preco = $preco; 
        $this->cor = $cor; 
        $this->modelo = $modelo; 
        $this->infoSistema = $infoSistema; 
    } 
}