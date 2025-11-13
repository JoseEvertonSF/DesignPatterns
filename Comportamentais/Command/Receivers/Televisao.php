<?php

namespace Command\Receivers;

use Command\Contracts\EletroDomesticoInterface;

class Televisao implements EletroDomesticoInterface{
    
    public function ligar()
    {   
        echo 'Tv ligada'.PHP_EOL;
    }

    public function desligar()
    {
        echo 'Tv desligada'.PHP_EOL;
    }

    public function aumentar()
    {
        echo 'Volume da tv aumentado'.PHP_EOL;
    }

    public function diminuir()
    {
        echo 'Volume do tv dimunido'.PHP_EOL;
    }
}