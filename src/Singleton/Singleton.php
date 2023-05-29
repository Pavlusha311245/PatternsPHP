<?php

namespace Pavlusha\Singleton;

class Singleton
{
    private static $instance;

    protected function __construct()
    {
        //
    }

    protected function clone()
    {
        //
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Impossible to unserialize singleton\n");
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
