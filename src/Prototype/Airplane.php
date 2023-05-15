<?php

namespace Pavlusha\Prototype;

/**
 * Prototype
 */
class Airplane
{
    public function __construct(
        public string $name,
        public        $maxSpeed = 0,
        public        $maxHigh = 0
    )
    {

    }

    public function __clone(): void
    {
        $this->name = 'Unknown';
    }
}
