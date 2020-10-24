<?php

namespace Src\Command;

class TurnOnCommand implements Command
{
    /**
     * @var LampReceiver
     */
    public $receiver;

    public function __construct(LampReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->turnOn();
    }
}
