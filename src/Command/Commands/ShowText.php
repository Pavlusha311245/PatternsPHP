<?php

namespace Pavlusha\Command\Commands;

use Pavlusha\Command\Base\CommandInterface;

/**
 * Concrete command
 */
class ShowText implements CommandInterface
{
    public function __construct(protected $params = null)
    {
    }

    public function execute()
    {
        echo 'Hello from ShowText command';
    }
}
