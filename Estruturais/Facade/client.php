<?php

require __DIR__.'/../../vendor/autoload.php';

use Facade\FaturamentoWmsFacade;

$faturamentoWms = new FaturamentoWmsFacade();
$faturamentoWms->faturamento();