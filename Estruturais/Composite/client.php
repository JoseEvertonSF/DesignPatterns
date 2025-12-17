<?php

require __DIR__.'/../../vendor/autoload.php';

use Composite\Colaborador;
use Composite\Lider;

$lider = new Lider('Pedro');
$lider->addLiderado(new Colaborador('José'));
$lider->addLiderado(new Colaborador('Maria'));
$lider->addLiderado(new Colaborador('João'));
$lider->addLiderado(new Colaborador('Francisco'));
$lider->addLiderado(new Colaborador('Joaquim'));

$diretor = new Lider('Davi');
$diretor->addLiderado(new Lider('Thiago'));
$diretor->addLiderado(new Lider('Luiz'));
$diretor->addLiderado(new Lider('Antônio'));
$diretor->addLiderado(new Lider('Moises'));
$diretor->addLiderado($lider);

$diretor->getLiderados();