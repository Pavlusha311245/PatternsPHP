<?php

namespace Pavlusha\State;

use Pavlusha\State\Base\StateInterface;

class FlyState implements StateInterface
{
    private $airplane;

    /**
     * @param mixed $airplane
     */
    public function setAirplane(Airplane $airplane): void
    {
        $this->airplane = $airplane;
    }

    public function getState()
    {
        echo get_class($this->airplane) . " is flying\n";
    }
}
