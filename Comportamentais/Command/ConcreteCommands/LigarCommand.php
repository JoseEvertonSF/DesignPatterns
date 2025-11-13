<?php 

namespace Command\ConcreteCommands;

use Command\Contracts\EletroDomesticoInterface;
use Command\Contracts\CommandInterface;

class LigarCommand implements CommandInterface{
    
    private EletroDomesticoInterface $receiver;
    
    function __construct(EletroDomesticoInterface $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->ligar();
    }
}