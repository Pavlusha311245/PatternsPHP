<?php

namespace Pavlusha\Visitor;

use Pavlusha\Visitor\Base\ControlInterface;
use Pavlusha\Visitor\Factory\AirplaneFactory;
use Pavlusha\Visitor\Factory\ShuttleFactory;

class EquipmentControl implements ControlInterface
{

    public function visitAirplaneFactory(AirplaneFactory $airplaneFactory)
    {
        // TODO: Implement visitAirplaneFactory() method.
    }

    public function visitShuttleFactory(ShuttleFactory $shuttleFactory)
    {
        // TODO: Implement visitShuttleFactory() method.
    }
}
