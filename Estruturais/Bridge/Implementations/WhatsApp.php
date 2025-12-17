<?php

namespace Bridge\Implementations;

use Bridge\Contracts\ShippingChannel;

class WhatsApp implements ShippingChannel
{
    public function send()
    {
        echo 'Enviando notificação via WhatsApp'.PHP_EOL;
    }
}