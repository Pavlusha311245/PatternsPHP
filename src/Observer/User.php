<?php

namespace Pavlusha\Observer;

class User implements SubscriberInterface
{
    public function __construct(
        private readonly string $name
    )
    {
    }

    public function alert($text)
    {
        echo "{$this->name} got alert with message {$text}\n";
    }
}
