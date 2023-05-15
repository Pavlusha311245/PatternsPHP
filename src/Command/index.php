<?php

namespace Pavlusha\Command;

use Pavlusha\Command\Commands\ShowText;

require '../../vendor/autoload.php';

$showTextCommand = new ShowText();

$console = new Console();
$console->setCommand($showTextCommand);
$console->executeCommand();
