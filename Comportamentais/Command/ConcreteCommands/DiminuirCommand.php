<?php 

namespace Command\ConcreteCommands;

use Command\Contracts\EletroDomesticoInterface;
use Command\Contracts\CommandInterface;

class DiminuirCommand implements CommandInterface{
    
    private EletroDomesticoInterface $receiver;
    
    function __construct(EletroDomesticoInterface $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->diminuir();
    }
}