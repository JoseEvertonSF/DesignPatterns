<?php

namespace Memento;

class EditorTextoMemento
{
    private string $text; 

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText() : string
    {
        return $this->text;
    }
}