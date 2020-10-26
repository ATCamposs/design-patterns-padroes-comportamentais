<?php

namespace Src\Visitor;

use Exception;

abstract class ElementAbstract
{
    protected $value;

    abstract public function validate($value): bool;

    public function setValue($value)
    {
        if (!$this->validate($value)) {
            throw new Exception("Invalid value");
        }
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->convert($this);
    }
}
