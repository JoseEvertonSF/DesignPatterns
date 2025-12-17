<?php

namespace Bridge\Abstractions;

use Bridge\Contracts\ShippingChannel;

class Notification
{   
    protected $shippingChannel;

    public function __construct(ShippingChannel $shippingChannel)
    {
        $this->shippingChannel = $shippingChannel;
    }

    public function send()
    {   
        echo 'Notificação Simples: ';
        $this->shippingChannel->send();
    }
}