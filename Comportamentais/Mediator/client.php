<?php

require __DIR__.'/../../vendor/autoload.php';

use Mediator\User;
use Mediator\ConcreteMediator\ChatRoomMediator;

$user1 = new User('Everton');
$user2 = new User('Maria Júlia');
$user3 = new User('Márcia');

$chat = new ChatRoomMediator();
$chat->addUser($user1);
$chat->addUser($user2);
$chat->addUser($user3);

$user1->send('Olá meus amores!');