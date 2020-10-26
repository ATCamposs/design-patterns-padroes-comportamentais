<?php

namespace Src\ChainOfResponsibility;

class Before extends Handler
{
    protected function execute(): void
    {
        var_dump('antes');
    }
}
