<?php

namespace Pavlusha\FactoryMethod;

require '../../vendor/autoload.php';

use Pavlusha\FactoryMethod\Factories\AirplaneFactory;
use Pavlusha\FactoryMethod\Factories\ShuttleFactory;

$airplane = AirplaneFactory::create();
$shuttle = ShuttleFactory::create();

$airplane->fly();
$shuttle->fly();
