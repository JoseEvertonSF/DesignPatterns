<?php

require __DIR__.'/../../vendor/autoload.php';

use Flyweight\FactoryIphoneFlyweight;
use Flyweight\Iphone; 

$factoryIphoneFlyweight = new FactoryIphoneFlyweight(); 
$iphoneFlyweight = $factoryIphoneFlyweight->create(); 
$iphone16 = new Iphone(4700.00, 'Azul', '16', $iphoneFlyweight); 
$iphone17 = new Iphone(10000.00, 'Laranja', '17', $iphoneFlyweight); 
var_dump([$iphone16, $iphone17]);