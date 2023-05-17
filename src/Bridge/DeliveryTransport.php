<?php

namespace Pavlusha\Bridge;

class DeliveryTransport
{
    public function __construct(
        protected TransportInterface $transport
    )
    {
    }

    public function deliveryOrder()
    {
        $this->transport->cargoOrdering();
        $this->transport->delivery();
    }
}
