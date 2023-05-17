<?php

namespace Pavlusha\Bridge;

class Airplane implements TransportInterface
{

    public function delivery()
    {
        echo "DeliveryTransport by plane\n";
    }

    public function cargoOrdering()
    {
        echo "Airplane cargo is sorted\n";
    }
}
