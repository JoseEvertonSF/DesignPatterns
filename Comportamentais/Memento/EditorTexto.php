<?php

namespace Memento;

use Memento\EditorTextoMemento;
use Memento\HistoryTexto;

class EditorTexto
{
    private string $text = '';

    public function write(string $words)
    {
        $this->text .= $words;
    }

    public function getText()
    {
        echo $this->text.PHP_EOL;
    }

    public function save()
    {
        return new EditorTextoMemento($this->text);
    }

    public function restore(EditorTextoMemento $memento)
    {
        $this->text = $memento->getText();
    }
}