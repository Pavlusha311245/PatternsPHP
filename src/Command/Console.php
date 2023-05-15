<?php

namespace Pavlusha\Command;

use Pavlusha\Command\Base\CommandInterface;

/**
 * Invoker
 */
class Console
{
    protected CommandInterface $command;

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        $this->command->execute();
    }
}
