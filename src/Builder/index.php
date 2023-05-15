<?php

namespace Pavlusha\Builder;

require '../../vendor/autoload.php';

$boeing700 = new AirplaneBuilder();
$boeing700->setSeats(700);
$boeing700->setGPS();
$boeing700->setGLONASS();

$boeing300 = new AirplaneBuilder();
$boeing300->setSeats(300);
$boeing300->setGPS();
$boeing300->setEngine();

var_dump($boeing700->getResult());
var_dump($boeing300->getResult());
