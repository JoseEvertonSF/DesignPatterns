<?php

namespace Prototype;

use Prototype\Contracts\Prototype;

class RegistraPrototype
{
    private array $prototypes = [];

    public function add(Prototype $prototype): void
    {
        $this->prototypes[] = $prototype;
    }

    public function get(int $key): Prototype
    {
        return clone $this->prototypes[$key];
    }
}