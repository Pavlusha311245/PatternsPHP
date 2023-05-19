<?php

namespace Pavlusha\Command;

use Pavlusha\Command\Commands\SaveCommand;
use Pavlusha\Command\Commands\ShowText;

require '../../vendor/autoload.php';

$showTextCommand = new ShowText();
$saveCommand = new SaveCommand();

$console = new Console();
$console->setCommands($showTextCommand, $saveCommand);
$console->executeCommands();
