<?php

namespace Pavlusha\Prototype;

require '../../vendor/autoload.php';

$airplaneBoeing = new Airplane('Boeing', 120, 130);
$airplaneEmbraer = clone $airplaneBoeing;
$airplaneEmbraer->name = 'Embraer';

var_dump($airplaneBoeing);
var_dump($airplaneEmbraer);
