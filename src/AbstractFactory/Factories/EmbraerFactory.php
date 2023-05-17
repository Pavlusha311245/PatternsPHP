<?php

namespace Pavlusha\AbstractFactory\Factories;

use Pavlusha\AbstractFactory\Base\FlyObjectFactory;
use Pavlusha\AbstractFactory\Base\PassengerPlaneInterface;
use Pavlusha\AbstractFactory\Base\SupersonicAircraftInterface;
use Pavlusha\AbstractFactory\Entries\EmbraerPassengerAirplane;

class EmbraerFactory extends FlyObjectFactory
{
    static function createPassengerPlane(): PassengerPlaneInterface
    {
        return new EmbraerPassengerAirplane();
    }

    static function createSupersonicAircraft(): SupersonicAircraftInterface
    {
        // TODO: Implement createSupersonicAircraft() method.
    }
}
