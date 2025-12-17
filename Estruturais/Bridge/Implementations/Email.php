<?php

namespace Bridge\Implementations;

use Bridge\Contracts\ShippingChannel;

class Email implements ShippingChannel
{
    public function send()
    {
        echo 'Enviando notificação via Email'.PHP_EOL;
    }
}