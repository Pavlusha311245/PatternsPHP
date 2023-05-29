<?php

namespace Pavlusha\Singleton;

/**
 * Basic example of using this pattern in a project
 */
class DatabaseConnection extends Singleton
{
    public function query($string): void
    {
        echo 'Query: ' . $string . "\n";
    }
}
