<?php

namespace Src\ChainOfResponsibility;

abstract class Handler
{
    /**
    * @var Handler
    */
    private $successor;

    abstract protected function execute(): void;

    public function handlerRequest(): void
    {
        $this->execute();

        if (isset($this->successor)) {
            $this->successor->handlerRequest();
        }
    }

    //opcional
    public function successor(Handler $successor): void
    {
        $this->successor = $successor;
    }

    //minha implementação
    public function next(): object
    {
        return $this->successor;
    }
}
