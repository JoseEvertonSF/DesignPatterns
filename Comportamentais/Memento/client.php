<?php

require __DIR__.'/../../vendor/autoload.php';

use Memento\EditorTexto;
use Memento\HistoricoTexto;

$editor = new EditorTexto();
$historico = new HistoricoTexto();

$editor->write('Eu ');
$historico->push($editor->save());
$editor->getText();

$editor->write('te ');
$historico->push($editor->save());
$editor->getText();

$editor->write('adoro!');
$editor->getText();
$editor->restore($historico->pop());
$editor->getText();

$editor->write('amo!');
$historico->push($editor->save());
$editor->getText();
