<?php

namespace Src\Command;

//podia implementar uma interface
class LampReceiver
{
    public function turnOn(): void
    {
        var_dump('Lamps on');
    }

    public function turnOff(): void
    {
        var_dump('Lamps off');
    }
}
