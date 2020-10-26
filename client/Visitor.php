<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Visitor\StringElement;
use Src\Visitor\UpperCaseVisitor;
use Src\Visitor\LowerCaseVisitor;

$element = new StringElement();
$element->setValue('André Campos');
$element->accept(new LowerCaseVisitor());
var_dump($element->getValue());
