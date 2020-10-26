<?php

namespace Src\Visitor;

class LowerCaseVisitor implements VisitorInterface
{
    public function convert(ElementAbstract $element)
    {
        $value = $element->getValue();
        $element->setValue(strtolower($value));
    }
}
