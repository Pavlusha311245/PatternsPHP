<?php

namespace Pavlusha\Strategy;

class CarWay implements Base\WayToArriveInterface
{

    public function toArrive()
    {
        echo "Arriving by car\n";
    }
}
