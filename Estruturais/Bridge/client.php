<?php

require __DIR__.'/../../vendor/autoload.php';

use Bridge\Implementations\Email;
use Bridge\Implementations\Sms;
use Bridge\Implementations\WhatsApp;
use Bridge\Abstractions\Notification;
use Bridge\Abstractions\NotificationAttachment;
use Bridge\Abstractions\UrgentNotification;

$wpp = new WhatsApp();
$sms = new Sms();
$email =  new Email();

$notification = new Notification($sms);
$notification->send();

$notificationAttachment = new NotificationAttachment($wpp);
$notificationAttachment->send();

$urgentNotification = new UrgentNotification($email);
$urgentNotification->send();