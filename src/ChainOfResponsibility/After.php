<?php

namespace Src\ChainOfResponsibility;

class After extends Handler
{
    protected function execute(): void
    {
        var_dump('depois');
    }
}
