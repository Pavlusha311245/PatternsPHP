<?php

namespace Pavlusha\Singleton;

require '../../vendor/autoload.php';

use Pavlusha\Singleton\DatabaseConnection;

$database1 = DatabaseConnection::getInstance();

$database2 = DatabaseConnection::getInstance();

$database1->query('test');

echo $database1 === $database2 ? 'Same instances' : 'Different instances';
