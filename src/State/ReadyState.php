<?php

namespace Pavlusha\State;

use Pavlusha\State\Base\StateInterface;

class ReadyState implements StateInterface
{
    private $airplane;

    /**
     * @param mixed $airplane
     */
    public function setAirplane($airplane): void
    {
        $this->airplane = $airplane;
    }

    public function getState()
    {
        echo get_class($this->airplane) . " is ready\n";
    }
}
