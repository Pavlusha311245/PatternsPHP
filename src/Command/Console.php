<?php

namespace Pavlusha\Command;

use Pavlusha\Command\Base\CommandInterface;

/**
 * Invoker
 */
class Console
{
    protected array $commands;

    /**
     * @param CommandInterface ...$commands
     */
    public function setCommands(CommandInterface ...$commands): void
    {
        $this->commands = $commands;
    }

    public function executeCommands()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
