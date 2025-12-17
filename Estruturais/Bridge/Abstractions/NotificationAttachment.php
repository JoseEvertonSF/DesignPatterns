<?php

namespace Bridge\Abstractions;

use Bridge\Contracts\ShippingChannel;
use Bridge\Abstractions\Notification;

class NotificationAttachment extends Notification
{   
    public function __construct(ShippingChannel $shippingChannel)
    {
        parent::__construct($shippingChannel);
    }

    public function send()
    {   
        echo 'Notificação com anexo: ';
        $this->shippingChannel->send();
    }
}