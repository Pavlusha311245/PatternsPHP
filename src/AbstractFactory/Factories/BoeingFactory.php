<?php

namespace Pavlusha\AbstractFactory\Factories;

use Pavlusha\AbstractFactory\Base\FlyObjectFactory;
use Pavlusha\AbstractFactory\Base\PassengerPlaneInterface;
use Pavlusha\AbstractFactory\Base\SupersonicAircraftInterface;
use Pavlusha\AbstractFactory\Entries\BoeingPassengerAirplane;

class BoeingFactory extends FlyObjectFactory
{
    static function createPassengerPlane(): PassengerPlaneInterface
    {
        return new BoeingPassengerAirplane();
    }

    static function createSupersonicAircraft(): SupersonicAircraftInterface
    {
        // TODO: Implement createSupersonicAircraft() method.
    }
}
