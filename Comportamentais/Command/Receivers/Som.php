<?php

namespace Command\Receivers;

use Command\Contracts\EletroDomesticoInterface;

class Som implements EletroDomesticoInterface{
    
    public function ligar()
    {   
        echo 'Som ligado'.PHP_EOL;
    }

    public function desligar()
    {
        echo 'Som desligado'.PHP_EOL;
    }

    public function aumentar()
    {
        echo 'Volume do som aumentado'.PHP_EOL;
    }

    public function diminuir()
    {
        echo 'Volume do som dimunido'.PHP_EOL;
    }
}