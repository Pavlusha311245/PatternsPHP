<?php

namespace Pavlusha\Visitor;

use Pavlusha\Visitor\Factory\AirplaneFactory;
use Pavlusha\Visitor\Factory\ShuttleFactory;

require '../../vendor/autoload.php';

$documentControl = new DocumentControl();
$equipmentControl = new EquipmentControl();

$factories = [];

$factories[] = new AirplaneFactory();
$factories[] = new ShuttleFactory();

foreach ($factories as $factory)
{
    $factory->accept($documentControl);
}
