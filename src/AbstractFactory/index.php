<?php

namespace Pavlusha\AbstractFactory;

use Pavlusha\AbstractFactory\Entries\EmbraerPassengerAirplane;
use Pavlusha\AbstractFactory\Factories\BoeingFactory;
use Pavlusha\AbstractFactory\Factories\EmbraerFactory;
use Pavlusha\ChainOfResponsibility\Middlewares\LowerCase;
use Pavlusha\ChainOfResponsibility\Middlewares\Trim;

require '../../vendor/autoload.php';

$boeingPassengerAirplane = BoeingFactory::createPassengerPlane();
$embraerSupersonicAircraft = EmbraerFactory::createSupersonicAircraft();

