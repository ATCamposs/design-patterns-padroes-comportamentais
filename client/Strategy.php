<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Strategy\DatabaseStorage;
use Src\Strategy\LocalStorage;
use Src\Strategy\LoggerContext;

$db = new DatabaseStorage();
$local = new LocalStorage(__DIR__);

(new LoggerContext($local))->setLog('Erro 404 na url ...', 'danger');
