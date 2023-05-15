<?php

namespace Pavlusha\FactoryMethod\Factories;

use Pavlusha\FactoryMethod\Base\FlyObjectFactory;
use Pavlusha\FactoryMethod\Base\FlyObjectInterface;
use Pavlusha\FactoryMethod\Entries\Airplane;

class AirplaneFactory extends FlyObjectFactory
{
    static function create(): FlyObjectInterface
    {
        return new Airplane();
    }
}
