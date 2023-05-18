<?php

namespace Pavlusha\State;

use Pavlusha\Visitor\Factory\AirplaneFactory;
use Pavlusha\Visitor\Factory\ShuttleFactory;

require '../../vendor/autoload.php';

$flyState = new FlyState();
$readyState = new ReadyState();
$airplane = new Airplane($readyState);
$airplane->getState();
$airplane->changeState($flyState);
$airplane->getState();
