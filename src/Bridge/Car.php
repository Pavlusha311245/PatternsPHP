<?php

namespace Pavlusha\Bridge;

class Car implements TransportInterface
{

    public function delivery()
    {
        echo "DeliveryTransport by car\n";
    }

    public function cargoOrdering()
    {
        echo "Car cargo is sorted\n";
    }
}
