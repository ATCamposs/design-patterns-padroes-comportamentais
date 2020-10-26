<?php

namespace Src\Command;

class TurnOffCommand implements Command
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
        $this->receiver->turnOff();
    }
}
