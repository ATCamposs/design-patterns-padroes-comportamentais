<?php

namespace Src\TemplateMethod;

class DiscountOrder extends OrderAbstract
{
    protected function changeValue(int $value): int
    {
        return -$value;
    }
}
