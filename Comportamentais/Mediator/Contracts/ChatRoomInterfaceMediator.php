<?php

namespace Mediator\Contracts;

use Mediator\User;

interface ChatRoomInterfaceMediator{
    public function sendMessage(string $message, User $sender);
    public function addUser(User $sender);
}