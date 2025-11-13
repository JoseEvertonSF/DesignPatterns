<?php

namespace Command\Receivers;

use Command\Contracts\EletroDomesticoInterface;

class ArCondicionado implements EletroDomesticoInterface{
    
    public function ligar()
    {   
        echo 'Ar condicionado ligado'.PHP_EOL;
    }

    public function desligar()
    {
        echo 'Ar condicionado desligado'.PHP_EOL;
    }

    public function aumentar()
    {
        echo 'Temperatura do ar condicionado aumentada'.PHP_EOL;
    }

    public function diminuir()
    {
        echo 'Temperatura do ar condicionado dimunida'.PHP_EOL;
    }
}