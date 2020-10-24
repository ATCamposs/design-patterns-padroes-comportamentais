<?php

namespace Src\Interpreter;

class Life implements Interpreter
{
    /**
     * @var Interpreter
     */
    private $frc;
    /**
     * @var Interpreter
     */
    private $con;
    /**
     * @var Interpreter
     */
    private $level;

    public function __construct(Interpreter $frc, Interpreter $con, Interpreter $level)
    {
        $this->frc = $frc;
        $this->con = $con;
        $this->level = $level;
    }

    public function interpret(int $mod = 0): float
    {
        $result = $this->frc->interpret() + $this->con->interpret();
        $result = $result / 2;
        return ceil($result) + $this->level->interpret() + $mod;
    }
}
