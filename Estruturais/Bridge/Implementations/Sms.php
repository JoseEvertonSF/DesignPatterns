<?php

namespace Bridge\Implementations;

use Bridge\Contracts\ShippingChannel;

class Sms implements ShippingChannel
{
    public function send()
    {
        echo 'Enviando notificação via sms'.PHP_EOL;
    }
}