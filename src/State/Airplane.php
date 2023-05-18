<?php

namespace Pavlusha\State;

use Pavlusha\State\Base\StateInterface;

class Airplane implements StateInterface
{

    public function __construct(
        private StateInterface $state
    )
    {
        $this->state->setAirplane($this);
    }

    /**
     * @param StateInterface $state
     */
    public function changeState(StateInterface $state): void
    {
        $this->state = $state;
        $this->state->setAirplane($this);
    }

    public function getState()
    {
        $this->state->getState();
    }
}
