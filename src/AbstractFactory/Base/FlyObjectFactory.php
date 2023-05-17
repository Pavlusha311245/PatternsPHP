<?php

namespace Pavlusha\AbstractFactory\Base;

abstract class FlyObjectFactory
{
    private function __construct()
    {
    }

    abstract static function createPassengerPlane(): PassengerPlaneInterface;
    abstract static function createSupersonicAircraft(): SupersonicAircraftInterface;
}
