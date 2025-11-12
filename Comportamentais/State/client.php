<?php 

require __DIR__.'/../../vendor/autoload.php';

use State\Carga;

// Código cliente
$carga = new Carga();
$carga->emConferencia(1);
$carga->emConferencia(2);
$carga->emConferencia(3);
$carga->conferir();
$carga->finalizar(1);
$carga->finalizar(2);
$carga->finalizar(3);
$carga->integrar(3);
var_dump($carga);