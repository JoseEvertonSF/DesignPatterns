<?php

namespace Mediator\ConcreteMediator;

use Mediator\User;
use Mediator\Contracts\ChatRoomInterfaceMediator;

class ChatRoomMediator implements ChatRoomInterfaceMediator
{
    public array $users = [];

    public function addUser(User $user)
    {   
        $user->setMediator($this);
        $this->users[] = $user;
    }

    public function sendMessage(string $message, User $sender)
    {
        foreach($this->users as $user)
        {
            if($user !== $sender){
                $user->receive($message, $sender->getName());
            }
        }
    }
}