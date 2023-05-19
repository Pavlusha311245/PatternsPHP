<?php

namespace Pavlusha\Strategy;

class BusWay implements Base\WayToArriveInterface
{

    public function toArrive()
    {
        echo "Arriving by bus\n";
    }
}
