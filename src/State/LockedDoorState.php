<?php

namespace Src\State;

class LockedDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function unlock()
    {
        return new ClosedDoorState();
    }
}
