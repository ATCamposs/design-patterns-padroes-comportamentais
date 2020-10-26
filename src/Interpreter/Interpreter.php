<?php

namespace Src\Interpreter;

interface Interpreter
{
    public function interpret(int $mod = 0): float;
}
