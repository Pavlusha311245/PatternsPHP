<?php

namespace Pavlusha\Bridge;

require '../../vendor/autoload.php';

$airplane = new Airplane();

$deliveryTransport = new DeliveryTransport($airplane);
$deliveryTransport->deliveryOrder();


