<?php

require __DIR__ . '/../vendor/autoload.php';

$frc = new Src\Interpreter\Force(14);
$con = new Src\Interpreter\Constitution(13);
$level = new Src\Interpreter\Level(2);

// $life = (fr + con) / 2 + level - arredondar para cima
$life = new Src\Interpreter\Life($frc, $con, $level);
var_dump($life->interpret());
var_dump($life->interpret(2));
