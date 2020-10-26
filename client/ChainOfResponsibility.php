<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\ChainOfResponsibility\Handler;
use Src\ChainOfResponsibility\Request;
use Src\ChainOfResponsibility\Before;
use Src\ChainOfResponsibility\After;

$before = new Before();
$request = new Request();
$after = new After();

$auth = new class extends Handler {
    protected function execute(): void
    {
        var_dump('autenticação');
    }
};

$auth->successor($before);
$before->successor($request);
$request->successor($after);

$auth->handlerRequest();
/*
$next = $auth;

while($next) {
    $next->handlerRequest();
    $next = $next->next();
}*/
