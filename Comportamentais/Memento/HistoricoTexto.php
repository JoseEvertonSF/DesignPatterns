<?php

namespace Memento;

use Memento\EditorTextoMemento;

class HistoricoTexto
{
    private array $texts = [];

    public function push(EditorTextoMemento $memento)
    {
        $this->texts[] = $memento;
    }

    public function pop(): ?EditorTextoMemento
    {
        return array_pop($this->texts);
    }
}