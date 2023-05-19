<?php

namespace Pavlusha\Strategy;

use Pavlusha\Strategy\Base\WayToArriveInterface;

class Airport
{
    private WayToArriveInterface $wayToArrive;

    /**
     * @param mixed $wayToArrive
     */
    public function setWayToArrive(WayToArriveInterface $wayToArrive): void
    {
        $this->wayToArrive = $wayToArrive;
    }

    public function toArrive()
    {
        $this->wayToArrive->toArrive();
    }
}
