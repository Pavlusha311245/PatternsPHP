<?php

namespace Pavlusha\Strategy;

require '../../vendor/autoload.php';

$carWay = new CarWay();
$busWay = new BusWay();

$airport = new Airport();

$airport->setWayToArrive($carWay);
$airport->toArrive();

$airport->setWayToArrive($busWay);
$airport->toArrive();
