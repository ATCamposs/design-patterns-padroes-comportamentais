<?php

namespace Src\ChainOfResponsibility;

class Request extends Handler
{
    protected function execute(): void
    {
        var_dump('requisição');
    }
}
