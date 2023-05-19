<?php

namespace Pavlusha\Command\Commands;

use Pavlusha\Command\Base\CommandInterface;

/**
 * Concrete command
 */
class SaveCommand implements CommandInterface
{

    public function execute()
    {
        echo "Saved\n";
    }
}
