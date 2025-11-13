<?php

namespace Command\Invoker;

use Command\Contracts\CommandInterface;

class ControleUniversal{

    private CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
    
}