<?php

namespace Pavlusha\FactoryMethod;

require '../../vendor/autoload.php';

use Pavlusha\FactoryMethod\Factories\AirplaneFactory;
use Pavlusha\FactoryMethod\Factories\ShuttleFactory;

$airplane = AirplaneFactory::create();
$shuttle = ShuttleFactory::create();

var_dump($airplane);
var_dump($shuttle);
