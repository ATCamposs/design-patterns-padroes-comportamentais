<?php

namespace Src\Interpreter;

class Force implements Interpreter
{
    /**
     * @var int
     */
    public $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function interpret(int $mod = 0): float
    {
        return $this->value + $mod;
    }
}
