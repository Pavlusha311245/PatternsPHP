<?php

namespace Pavlusha\FactoryMethod\Base;

abstract class FlyObjectFactory
{
    private function __construct()
    {
    }

    abstract static function create(): FlyObjectInterface;
}
