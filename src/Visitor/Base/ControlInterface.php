<?php

namespace Pavlusha\Visitor\Base;

use Pavlusha\Visitor\Factory\AirplaneFactory;
use Pavlusha\Visitor\Factory\ShuttleFactory;

interface ControlInterface
{
    public function visitAirplaneFactory(AirplaneFactory $airplaneFactory);
    public function visitShuttleFactory(ShuttleFactory $shuttleFactory);
}
