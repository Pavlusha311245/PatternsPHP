<?php

namespace Pavlusha\Singleton;

class Singleton
{
    private static $instance;

    protected function __construct()
    {

    }

    protected function clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Impossible to unserialize singleton");
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
