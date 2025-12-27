<?php
require __DIR__.'/../../vendor/autoload.php';

use Prototype\RegistraPrototype;
use Prototype\HelloWorld;

$prototypes = new RegistraPrototype();

$prototypes->add(new HelloWorld());

$clone = $prototypes->get(0);
$prototypes->add($clone);

var_dump($prototypes->get(0));
var_dump($prototypes->get(1));