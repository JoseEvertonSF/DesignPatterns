<?php

require __DIR__.'/../../vendor/autoload.php';

use Singleton\ApiService;

$api = ApiService::getInstance();
$api2 = ApiService::getInstance();
var_dump($api);
var_dump($api2);