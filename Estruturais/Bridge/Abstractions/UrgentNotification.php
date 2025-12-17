<?php

namespace Bridge\Abstractions;

use Bridge\Contracts\ShippingChannel;
use Bridge\Abstractions\Notification;

class UrgentNotification extends Notification
{   
    public function __construct(ShippingChannel $shippingChannel)
    {
        parent::__construct($shippingChannel);
    }

    public function send()
    {   
        echo 'Notificação urgente: ';
        $this->shippingChannel->send();
    }
}