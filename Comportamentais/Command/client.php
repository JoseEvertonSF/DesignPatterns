<?php

require __DIR__.'/../../vendor/autoload.php';

use Command\Invoker\ControleUniversal;
use Command\Receivers\ArCondicionado;
use Command\Receivers\Televisao;
use Command\Receivers\Som;
use Command\ConcreteCommands\AumentarCommand;
use Command\ConcreteCommands\DesligarCommand;
use Command\ConcreteCommands\DiminuirCommand;
use Command\ConcreteCommands\LigarCommand;

$ar = new ArCondicionado();
$tv = new Televisao();
$som = new Som();

$controle = new ControleUniversal();

echo '------Ar-------'.PHP_EOL;
$controle->setCommand(new LigarCommand($ar));
$controle->pressButton();
$controle->setCommand(new AumentarCommand($ar));
$controle->pressButton();
$controle->setCommand(new DiminuirCommand($ar));
$controle->pressButton();
$controle->setCommand(new DesligarCommand($ar));
$controle->pressButton();

echo '--------Tv-------'.PHP_EOL;
$controle->setCommand(new LigarCommand($tv));
$controle->pressButton();
$controle->setCommand(new AumentarCommand($tv));
$controle->pressButton();
$controle->setCommand(new DiminuirCommand($tv));
$controle->pressButton();
$controle->setCommand(new DesligarCommand($tv));
$controle->pressButton();

echo '---------Som--------'.PHP_EOL;
$controle->setCommand(new LigarCommand($som));
$controle->pressButton();
$controle->setCommand(new AumentarCommand($som));
$controle->pressButton();
$controle->setCommand(new DiminuirCommand($som));
$controle->pressButton();
$controle->setCommand(new DesligarCommand($som));
$controle->pressButton();