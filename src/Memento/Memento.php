<?php

namespace Src\Memento;

class Memento
{
    private $obj;

    public function __construct(Entity $obj)
    {
        $this->obj = clone $obj;
    }

    public function getState()
    {
        return clone $this->obj;
    }
}
