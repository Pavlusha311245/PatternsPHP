<?php

namespace Pavlusha\Visitor\Factory;

use Pavlusha\Visitor\Base\ControlInterface;
use Pavlusha\Visitor\Base\FactoryInterface;

class ShuttleFactory implements FactoryInterface
{
    public function accept(ControlInterface $control)
    {
        echo get_class($control) . " visited Shuttle Factory\n";
    }
}
