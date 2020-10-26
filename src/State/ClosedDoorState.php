<?php

namespace Src\State;

class ClosedDoorState extends AbstractDoorState
{
    /**
     * @return OpenDoorState
     */
    public function open()
    {
        return new OpenDoorState();
    }

    /**
     * @return LockedDoorState
     */
    public function lock()
    {
        return new LockedDoorState();
    }
}
