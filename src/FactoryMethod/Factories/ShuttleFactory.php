<?php

namespace Pavlusha\FactoryMethod\Factories;

use Pavlusha\FactoryMethod\Base\FlyObjectFactory;
use Pavlusha\FactoryMethod\Base\FlyObjectInterface;
use Pavlusha\FactoryMethod\Entries\Shuttle;

class ShuttleFactory extends FlyObjectFactory
{

    static function create(): FlyObjectInterface
    {
        return new Shuttle();
    }
}
