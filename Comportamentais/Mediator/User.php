<?php

namespace Mediator;
use Mediator\Contracts\ChatRoomInterfaceMediator;

class User{
    private string $name;
    private ChatRoomInterfaceMediator $mediator;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setMediator(ChatRoomInterfaceMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function getName()
    {
        return $this->name;
    }

    public function send(string $msg)
    {
        $this->mediator->sendMessage($msg, $this);
    }

    public function receive(string $msg, string $senderName)
    {
        echo $this->name.' recebeu mensagem de '.$senderName.PHP_EOL;
    }
}