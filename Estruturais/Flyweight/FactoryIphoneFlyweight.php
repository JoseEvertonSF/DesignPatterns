<?php

namespace Flyweight;

use Flyweight\IphoneFlyweight; 

class FactoryIphoneFlyweight
{
    private ?IphoneFlyweight $flyweight = null;

    public function create()
    {
        if ($this->flyweight === null) {
            $this->flyweight = new IphoneFlyweight();
        }

        return $this->flyweight;
    }
}